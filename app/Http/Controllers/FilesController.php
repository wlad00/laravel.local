<?php

namespace App\Http\Controllers;
//namespace App\Http\Libraries;

use App\Sms;


class FilesController extends Controller
{


    /*--------------------------------*/

    public function test()
    {

        echo 'testSMS';

        $phone = '0548871588';
        $message = "testSms";

        $sms = new Sms();


        $res = $sms->Send('',$phone,$message);

        dd($res);
    }
}
