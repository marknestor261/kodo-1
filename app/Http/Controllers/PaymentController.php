<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Flutterwave\Transaction;
use Flutterwave\Util\Currency;
use App\Flutterwave\FlutterwaveHelper;
use App\Models\PaymentPlan;
use App\Models\User;
use Carbon\Carbon;

class PaymentController extends Controller
{
    public function payWithMomo(Request $request)
    {
        $validated = $request->validate([
            'phone' => 'required|min:8',
            'amount' => 'required',
            'is_mtn' => 'required'
        ], [
            'phone.required' => 'The phone field is required.',
            'phone.min' => 'The phone must be at least 8 characters.',
            'amount.required' => 'The amount field is required.',
            'is_mtn.required' => 'Choose a provider',
        ]);
        
        $txref = uniqid().time();
        $callbackUrl = "http://{$_SERVER['HTTP_HOST']}/verify/{$txref}/payment/{$request->plan_id}";
        $data = FlutterwaveHelper::initiateMobilePay($request->phone, $request->is_mtn, 
                $request->amount, $txref, $callbackUrl);
        return response()->json($data);
    }


    public function handleFlutterwaveCallback($txref, $plan_id)
    {
        $transactionService = new \Flutterwave\Service\Transactions();

        $res = $transactionService->verifyWithTxref($txref);

        if ($res->status === 'success') {
            // Payment was successful, update your database and return a success message
            $plan = PaymentPlan::find($plan_id);
            return $this->paymentSuccess($plan);
        } else {
            // Payment failed, return an error message
            return $this->paymentFailure();
        }
    }

    
    public function payWithCard(Request $request)
    { 
        $validated = $request->validate([
            'amount' => 'required',
        ], [
            'amount.required' => 'The amount field is required.'
        ]); 

        $txref = uniqid().time();
        $amount = $request->input('amount');
        $callbackUrl = "http://{$_SERVER['HTTP_HOST']}/verify/{$txref}/payment/{$request->plan_id}";
        $paymentData = FlutterwaveHelper::initiatePayment($amount, $txref, $callbackUrl);
        return response()->json($paymentData);
    }

    private function paymentSuccess(PaymentPlan $plan)
    {
        $user = auth()->user();
        $carbon = Carbon::createFromFormat('Y-m-d H:i:s', $user->pay_deadline->lt(now()) ? now() : $user->pay_deadline );
        // add the duration in days
        $carbon->addDays($plan->duration);

        $user->update([
            'is_paid' => true,
            'pay_deadline' => $carbon
        ]);

        return redirect()->route('dashboard');
    }

    private function paymentFailure()
    {
        $user = auth()->user();
        if($user->pay_deadline->lt(now()) && $user->is_paid) {
            $user->update([
                'is_paid' => false,
            ]);
        }

        return redirect()->route('dashboard');
    }

    public static function cronJob()
    {
        $users = User::get();
        foreach ($users as $key => $value) {
            if($value->pay_deadline->lt(now()) && $value->is_paid) {
                $value->update([
                    'is_paid' => 0,
                ]);
                $value->save();
            }
        }
    }

    // GET REQUESTS
    public function chooseMethod()
    {
        return view('admin.dashboard.payments.choose_method');
    }


    
}

// class PaymentController extends Controller
// {
//     public function initiatePayment(Request $request)
//     {
//         $amount = $request->input('amount');
//         $email = $request->input('email');
//         $callbackUrl = $request->input('callback_url');

//         $paymentData = FlutterwaveHelper::initiatePayment($amount, $email, $callbackUrl);

//         return response()->json($paymentData);
//     }
// }
