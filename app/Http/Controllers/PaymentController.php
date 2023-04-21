<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Flutterwave\Transaction;


class PaymentController extends Controller
{
    public function payWithFlutterwave()
    {
        $flutterwave = new Transaction($public_key, $secret_key, $env);
        // Replace $public_key, $secret_key, and $env with your own API keys and environment
    }
}

