<?php

namespace App\Services;

use Flutterwave\Flutterwave;
use Flutterwave\Standard;
use Illuminate\Support\Facades\Config;

class FlutterwaveService
{
    protected $public_key;
    protected $secret_key;

    public function __construct()
    {
        $this->public_key = env('FLUTTERWAVE_PUBLIC_KEY');
        $this->secret_key = env('FLUTTERWAVE_SECRET_KEY');
    }

    public function initializePayment($data)
    {
        Config::set('flutterwave.publicKey', $this->public_key);
        Config::set('flutterwave.secretKey', $this->secret_key);

        $payment = new Flutterwave();
        $payment->setPublicKey($this->public_key);
        $payment->setSecretKey($this->secret_key);

        $payment_data = array(
            'amount' => $data['amount'],
            'currency' => $data['currency'],
            'txref' => $data['txref'],
            'redirect_url' => $data['redirect_url'],
            'payment_options' => 'card, mobilemoneyuganda, ussd',
            'meta' => array(
                'user_id' => $data['user_id'],
            ),
            'customer' => array(
                'email' => $data['email'],
                'phonenumber' => $data['phonenumber'],
                'name' => $data['name'],
            ),
            'customizations' => array(
                'title' => $data['title'],
                'description' => $data['description'],
                'logo' => $data['logo'],
            ),
        );

        return $payment->initializePayment($payment_data);
    }

    public function verifyPayment($txref)
    {
        Config::set('flutterwave.publicKey', $this->public_key);
        Config::set('flutterwave.secretKey', $this->secret_key);

        $payment = new Flutterwave();
        $payment->setPublicKey($this->public_key);
        $payment->setSecretKey($this->secret_key);

        return $payment->verifyTransaction($txref);
    }

    public function createFlutterwavePlan($data)
    {
        Config::set('flutterwave.publicKey', $this->public_key);
        Config::set('flutterwave.secretKey', $this->secret_key);

        $flutterwave = new Flutterwave();
        $flutterwave->setPublicKey($this->public_key);
        $flutterwave->setSecretKey($this->secret_key);

        $response = $flutterwave->createPlan([
            'name' => $data['name'],
            'amount' => $data['amount'],
            'interval' => $data['interval'],
            'duration' => $data['duration'],
            'seckey' => $this->secret_key,
            'currency' => 'USD'
        ]);

        return $response;
    }
}
