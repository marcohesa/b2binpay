<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function pay(Request $request) {
        $request->validate([
            'value' => 'required|numeric|min:5',
            'currency' => 'required',
            'payment_platform' => 'required',

        ]);

        return $request->all();
    }

    public function approval() {

    }

    public function cancelled() {

    }
}
