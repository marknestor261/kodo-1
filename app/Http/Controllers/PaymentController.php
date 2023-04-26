<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Flutterwave\Transaction;
use Flutterwave\Util\Currency;
use App\Flutterwave\FlutterwaveHelper;
use App\Models\PaymentPlan;



class PaymentController extends Controller
{
    public function payWithMomo(Request $request)
    {
        $rules = [
            'phone' => 'required|min:8',
            'amount' => 'required',
            'is_mtn' => 'required'
        ];
        
        $messages = [
            'phone.required' => 'The phone field is required.',
            'phone.min' => 'The phone must be at least 8 characters.',
            'amount.required' => 'The amount field is required.',
            'is_mtn.required' => 'Choose a provider',
        ];
        $validated = $request->validate($rules, $messages);
        $txref = uniqid().time();
        $data = FlutterwaveHelper::initiateMobilePay($request->phone, $request->is_mtn, 
                $request->amount, $txref, "http://{$_SERVER['HTTP_HOST']}/verify/{$txref}/payment");
        return response()->json($paymentData);
    }


    public function handleFlutterwaveCallback($txref)
    {
        $transactionService = (new \Flutterwave\Service\Transactions());

        $res = $transactionService->verifyWithTxref($txref);

        if ($res->status === 'success') {
            // Payment was successful, update your database and return a success message
            redirect()->action('DashboardController@userPaid');
        } else {
            // Payment failed, return an error message
            redirect()->action('DashboardController@userNotPaid');
        }
    }

    
    public function payWithCard(Request $request)
    { 
        $rules = [
            'amount' => 'required',
        ];
        $messages = [
            'amount.required' => 'The amount field is required.'
        ];
        $validated = $request->validate($rules, $messages); 
        $txref = uniqid().time();
        $amount = $request->input('amount');
        $paymentData = FlutterwaveHelper::initiatePayment($amount, $txref, "http://{$_SERVER['HTTP_HOST']}/verify/{$txref}/payment");
        return response()->json($paymentData);
            
    }

    public function paymentSuccess(PaymentPlan $plan)
    {
        $user = auth()->user();
        $carbon = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $user->pay_deadline < now() ? now() : $user->pay_deadline );
        // add the duration in days
        $carbon->addDays($plan->duration);

        $user->update([
            'is_paid' => 1,
            'pay_deadline' => $carbon
        ]);
        $user->save();
    }

    public static function cronJob()
    {
        $users = User::get();
        foreach ($users as $key => $value) {
            if($value->pay_deadline < now() && $value->is_paid) {
                $value->update([
                    'is_paid' => 0,
                ]);
                $value->save();
            }
        }
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
