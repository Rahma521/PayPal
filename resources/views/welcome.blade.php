@extends('main')

@section('content')
<div class="flex-center position-ref full-height">
        <div class="content">
            <h1 class=''>Welcome to</h1>
            <table border="0" cellpadding="10" cellspacing="0" align="center">
                <tr>
                    <td align="center"></td>
                </tr>
                <tr>
                    <td align="center"><a href="https://www.paypal.com/in/webapps/mpp/paypal-popup"
                            title="How PayPal Works"
                            onclick="javascript:window.open('https://www.paypal.com/in/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img
                                src="https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-200px.png" border="0"
                                class='my-3' alt="PayPal Logo"></a></td>
                </tr>
            </table>
            <label for="exampleFormControlTextarea1" class="form-label">Credit Number</label>
            <input class="form-control w-25  m-auto " type="text" placeholder="i.e 100 usd"
                aria-label="default input example">
            <a href="{{ route('payment') }}" class="btn btn-success m-4 w-25">Pay from Paypal</a>
            
        </div>
        </div>
        @endsection