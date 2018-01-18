<?php
namespace app\index\controller;
use php\api_demo\SmsDemo;

class Index
{
    public function index()
    {
        $sms = new SmsDemo();
        $response = SmsDemo::sendSms();
        dump($response);exit;
    }
}
