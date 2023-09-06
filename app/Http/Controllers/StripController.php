<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\StripeClient;
use Illuminate\View\View;

class StripController extends Controller
{
    public function stripe(): view
    {
        return view("stripe");
    }
    public function stripeCheckout(Request $request)
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET_KEY'));
        $redirectUrl = route("stripe.checkout.success") . '?session_id={CHECKOUT_SESSION_ID}';
        $response = $stripe->checkout->sessions->create([
            "success_url" => $redirectUrl,
            "customer_email" => "hafizrehman925@gmail.com", // Note the corrected field name
            "payment_method_types" => ['card'],
            'line_items' => [
                [
                    'price_data' => [
                        'product_data' => [
                            'name' => $request->product
                        ],
                        'unit_amount' => 100 * $request->price, // Note the corrected field name
                        'currency' => 'USD',
                    ],
                    'quantity' => 1
                ],
            ],
            'mode' => 'payment',
            'allow_promotion_codes' => true
        ]);
        return redirect($response['url']);
    }
    
    public function stripeCheckoutSuccess(Request $request)
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET_KEY'));
        $response = $stripe->checkout->sessions->retrieve($request->session_id);
        return redirect()->route('stripe.home')->with("success", 'payment successfull');
    }
}
