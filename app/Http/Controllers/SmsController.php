<?php

namespace App\Http\Controllers;

use Twilio\Rest\Client;
use Exception;
use Illuminate\Http\Request;


class SmsController extends Controller
{
    public  function index(){

        return view('sms_page');
    }

    public  function sendSms(Request $request){

        $receiver_number = $request->number;
        $message         = 'SMS From Mithu Hasan';

        try {
            $account_sid   = getenv("TWILIO_SID");
            $auth_token    = getenv("TWILIO_TOKEN");
            $twilio_number = getenv("TWILIO_FROM");

            $client = new Client($account_sid,$auth_token);
            $client->messages->create($receiver_number,[
                'from' => $twilio_number,
                'body' => $message
            ]);
            return redirect()->back();

        }catch (Exception $e){
            echo $e;
        }

    }
}
