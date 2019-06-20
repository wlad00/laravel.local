<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class mailController extends Controller
{
    public function send(){

        Mail::send(['text'=>'mail'],['name','Pollit'],function($message){

            $message->to('wladsliw@list.ru')->subject('Subject6 text');
            $message->from('info@pollit.co.il','Pollit');
        });
    }
}
