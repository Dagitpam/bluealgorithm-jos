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
          // $getAmount= Auth::user()->amount; 
          
          // $paystack = new Paystack();
          // $request-> first_name=Auth::user()->fName;
          // $request-> last_name=Auth::user()->lName;
          // $request-> email=Auth::user()->email;    
          // $request-> phone=Auth::user()->phone;
          // $request-> amount = $getAmount*100;
          // $request->reference = Paystack::genTranxRef();
          // $request->key = config('paystack.secretkey');
      
          // return Paystack::getAuthorizationUrl()->redirectNow();






      $url = "https://api.paystack.co/transaction/initialize";
      $fields = [
        'email' => "customer@email.com",
        'amount' => 20 * 100,
        'first_name'=>Auth::user()->fName,
        'last_name'=>Auth::user()->lName,
        'phone'=>Auth::user()->phone
      ];
      $fields_string = http_build_query($fields);
      //open connection
      $ch = curl_init();
      
      //set the url, number of POST vars, POST data
      curl_setopt($ch,CURLOPT_URL, $url);
      curl_setopt($ch,CURLOPT_POST, true);
      curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Authorization: Bearer sk_test_002f673ddc835714755c7359df19d141dae46e6e",
        "Cache-Control: no-cache",
      ));
      
      //So that curl_exec returns the contents of the cURL; rather than echoing it
      curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 
      
            
      //execute post
      $result =json_decode(curl_exec($ch));
                    
      $link = $result->data->authorization_url;

      return redirect($link);


        } catch (\GuzzleHttp\Exception\RequestException $e) {
            // return
            
            return back()->with('error','Sorry! Check your network connections');
        }
            
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {


      $reference = $request->query('reference');



      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.paystack.co/transaction/verify/".$reference,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
          "Authorization: Bearer sk_test_002f673ddc835714755c7359df19d141dae46e6e",
          "Cache-Control: no-cache",
        ),
      ));
      
   $response =json_decode (curl_exec($curl),true);
    dd($status = $response['data']['status']);






        $paymentDetails = Paystack::getPaymentData();
        dd($paymentDetails);

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