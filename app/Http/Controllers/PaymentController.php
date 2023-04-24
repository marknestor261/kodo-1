<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Flutterwave\Transaction;
use Flutterwave\Util\Currency;


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
        $data = [
            "amount" => $request->amount,
            "currency" => Currency::UGX,
            "tx_ref" => $txref,
            "redirectUrl" =>  "http://{$_SERVER['HTTP_HOST']}/verify/$txref/pay/momo",
            "additionalData" => [
                "network" => $request->is_mtn? "MTN": "AIRTEL",
            ]
        ];
        
        $momopayment = \Flutterwave\Flutterwave::create("momo");
        $customerObj = $momopayment->customer->create([
            "full_name" => auth()->user()->name,
            "email" => auth()->user()->email,
            "phone" => $request->phone
        ]);
        $data['customer'] = $customerObj;
        $payload  = $momopayment->payload->create($data);
        $result = $momopayment->initiate($payload);
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

    
    public function payWithFlutterwave()
    {
        $flutterwave = new Transaction($public_key, $secret_key, $env);
        // Replace $public_key, $secret_key, and $env with your own API keys and environment
    }
}

