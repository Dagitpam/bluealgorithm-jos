<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Guzzle\Http\Exception\ClientErrorResponseException;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Paystack;
use App\User;


class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway(Request $request)
    {
        
        
        try {
          $getAmount= Auth::user()->amount; 
          $amount = $getAmount * 100;   
          $paystack = new Paystack();
          $request-> first_name=Auth::user()->fName;
          $request-> last_name=Auth::user()->lName;
          $request-> email=Auth::user()->email;    
          $request-> phone=Auth::user()->phone;
          $request-> amount = $amount;
          $request->reference = Paystack::genTranxRef();
          $request->key = config('paystack.secretkey');
      
          return Paystack::getAuthorizationUrl()->redirectNow();


        } catch (\GuzzleHttp\Exception\RequestException $e) {
            // retur
            
            return back()->with('error','Sorry! Check your network connections');
        }
            
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

          // dd($paymentDetails);
        
            
        $transId = $paymentDetails['data']['id'];
        $transStatus = $paymentDetails['data']['status'];
        $amountNaira = $paymentDetails['data']['amount']/100;
        $date = $paymentDetails['data']['paid_at'];

        $dateExplode = explode("T",$date);
        //put this date in database
        $dateDayFinal = $dateExplode[0];

        // return ($dateDayFinal);
        //put transaction id, transaction status, amount and date here


        //Insert into database
        $id = Auth::user()->id;
        $post = User::find($id);
        $post-> transId =$transId;
        $post-> transStatus =$transStatus;
        $post-> amount =$amountNaira;
        // $post-> date=$dateDayFinal;
        $post->save();
        // $id = Auth::User()->id;
        // $user=User::find($id);
        // $user-> status='success';
        // $user->save();
        
        return redirect('/user-index');
        }
        
        





        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    
}