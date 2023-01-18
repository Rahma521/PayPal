<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Console\View\Components\Alert;
use Srmklive\PayPal\Services\ExpressCheckout;

use Illuminate\Http\Request;

class PayPalController extends Controller
{
    
    public function payment()
    {
        $data = [];
        $data['items'] = [
            [
                'name' => 'Apple',
                'price' => 100,
                'desc'  => 'Macbook pro 14 inch',
                'qty' => 1
            ]
        ];

        $data['invoice_id'] = 2;
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url'] = route('payment.success');
        $data['cancel_url'] = route('payment.cancel');
        $data['total'] = 100;

        $provider = new ExpressCheckout;

        $response = $provider->setExpressCheckout($data);

        $response = $provider->setExpressCheckout($data, true);

        return redirect($response['paypal_link']);
    }
    public function cancel()
    {
        ('Your payment is canceled.');
    }

    public function success(Request $request)
    {
        $provider = new ExpressCheckout;
        $response = $provider->getExpressCheckoutDetails($request->token);

        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            dd('Your payment was successful.');
        }

        dd('Please try again later.');
    }


    public function delete(Request $request, $itemId){

        $id = Transaction::find($itemId);
        Transaction::destroy($itemId->id);

        // if ($request->ajax()){
        //     Transaction::destroy($request->id);
        // }
    }
}
