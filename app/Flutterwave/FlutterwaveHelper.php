<?php
   
namespace App\Flutterwave;

use Flutterwave\Flutterwave;

class FlutterwaveHelper
{
   public static function initiatePayment($amount, $txref, $callbackUrl)
   {
       $publicKey = env('FLUTTERWAVE_PUBLIC_KEY');
       $secretKey = env('FLUTTERWAVE_SECRET_KEY');

       Flutterwave::setApiKey($secretKey);
       Flutterwave::setPublicKey($publicKey);

       $meta = UserMetaData::where('user_id', auth()->user()->id)->first();
       $user = User::find(auth()->user()->id);
       $user_name = $meta->first_name. ' '. $meta->last_name;
       $user_email = $user->email;

       $paymentData = [
           "amount" => $amount,
           "email" => $user_email,
           "callback_url" => $callbackUrl,
           "tx_ref" => $txref,
           "metadata" => [
               "custom_fields" => [
                   [
                       "display_name" => "Kodo Invoice",
                       "variable_name" => "invoice_number",
                       "value" => "Invoice0001"
                   ]
               ]
           ]
       ];

       $payment = Flutterwave::initializePayment($paymentData);

       if ($payment['status'] === 'success') {
           $data = [
               'status' => 'success',
               'message' => 'Payment initiated successfully',
               'paymentData' => $payment['data']
           ];
       } else {
           $data = [
               'status' => 'error',
               'message' => 'Failed to initiate payment',
               'error' => $payment['message']
           ];
       }

       return $data;
   }

   public static function initiateMobilePay($phone, $is_mtn, $amount, $txref, $callbackUrl)
   {
        $publicKey = env('FLUTTERWAVE_PUBLIC_KEY');
        $secretKey = env('FLUTTERWAVE_SECRET_KEY');

        Flutterwave::setApiKey($secretKey);
        Flutterwave::setPublicKey($publicKey);
        $txref = uniqid().time();
        $data = [
            "amount" => $amount,
            "currency" => Currency::USD,
            "tx_ref" => $txref,
            "redirectUrl" =>  $callbackUrl,
            "additionalData" => [
                "network" => $is_mtn? "MTN": "AIRTEL",
            ]
        ];
        $meta = UserMetaData::where('user_id', auth()->user()->id)->first();
        $user = User::find(auth()->user()->id);
        $user_name = $meta->first_name. ' '. $meta->last_name;
        $user_email = $user->email;
        
        $momopayment = \Flutterwave\Flutterwave::create("momo");
        $customerObj = $momopayment->customer->create([
            "full_name" => $user_name,
            "email" => $user_email,
            "phone" => $phone
        ]);
        $data['customer'] = $customerObj;
        $payload  = $momopayment->payload->create($data);
        $result = $momopayment->initiate($payload);

        if ($payment['status'] === 'success') {
            $data = [
                'status' => 'success',
                'message' => 'Payment initiated successfully',
                'paymentData' => $payment['data']
            ];
        } else {
            $data = [
                'status' => 'error',
                'message' => 'Failed to initiate payment',
                'error' => $payment['message']
            ];
        }
 
        return $data;
   }
}
