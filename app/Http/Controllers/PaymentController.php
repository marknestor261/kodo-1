<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Flutterwave\Transaction;


class PaymentController extends Controller
{
    public function payWithFlutterwave(Request $request)
    {
        $flutterwave = new Transaction($public_key, $secret_key, $env);
    
        $payment = $flutterwave->initialize([
            'amount' => $request->input('amount'),
            'email' => $request->input('email'),
            'tx_ref' => 'TXREF_'.uniqid(),
            'redirect_url' => route('flutterwave.callback'),
            'payment_options' => 'card',
            'meta' => [
                'user_id' => auth()->user()->id,
            ],
            'currency' => 'NGN',
        ]);
    
        return redirect($payment['data']['authorization_url']);
    }


    public function handleFlutterwaveCallback(Request $request)
    {
        $flutterwave = new Transaction($public_key, $secret_key, $env);

        $payment = $flutterwave->verify($_GET['tx_ref']);

        if ($payment['status'] == 'success') {
            // Payment was successful, update your database and return a success message
        } else {
            // Payment failed, return an error message
        }
    }

    
}

