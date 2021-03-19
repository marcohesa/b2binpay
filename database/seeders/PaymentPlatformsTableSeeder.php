<?php

namespace Database\Seeders;

use App\Models\PaymentPlatform;
use Illuminate\Database\Seeder;

class PaymentPlatformsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentPlatform::create([
            'name' => 'b2binpay',
            'image' => 'img/paymentsPlatform/paypal.jpg',
        ]);
        PaymentPlatform::create([
            'name' => 'Paypal',
            'image' => 'img/paymentsPlatform/paypal.jpg',
        ]);
        PaymentPlatform::create([
            'name' => 'Stripe',
            'image' => 'img/paymentsPlatform/stripe.jpg',
        ]);
    }
}
