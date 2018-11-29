<?php


namespace App;

use SoapClient;

class Sms{
    private $apiUser = 'panel4all';
    private $apiPass = 'nir#panel4all';
    //private $senderName = 'מכון היצוא';
    private $senderName = 'Export';
    private $DeliveryDelayInMinutes = 0;
    private $ExpirationDelayInMinutes = 720;
    private $soap = null;

    public function __construct()
    {
        $this->soap =  new SoapClient("http://simplesms.co.il/webservice/sendsmsws.asmx?wsdl");

        // Assign the CodeIgniter super-object
//        $this->CI =& get_instance();
        //$this->CI->load->model("surveyuser_mod");
    }

    public function Send($from,$phone,$msg) {
        $params['UserName'] = $this->apiUser;
        $params['EncryptPassword'] = $this->apiPass;
        $params['Subscribers'] = $phone;
        $params['Message'] = $msg;
        $params['SenderName'] = $from ? $from : $this->senderName;
        $params['DeliveryDelayInMinutes'] = $this->DeliveryDelayInMinutes;
        $params['ExpirationDelayInMinutes'] = $this->ExpirationDelayInMinutes;
//debug($params);
        $response = $this->soap->__soapCall("SendSms", [$params]);
        $result = $response->SendSmsResult;

        return $result;
    }
}