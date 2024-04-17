<?php

namespace App\Http\Controllers;

use App\Service\mylogger;
use Illuminate\Http\Request;

class DIController extends Controller
{
    private  $myservice;
    public function __construct(mylogger $service)
    {

        $this->myservice=$service;
    }


    public function f1(){
        $service = new mylogger();
        $service->log("This is my message from the function without DI");
        return "ok";
    }

    public function f2(mylogger $service){
        $service->log("this is my message from function with DI");
        return "ok";
    }

    public function f3(mylogger $service){
        $service->log("this is my message from function with DI");
        return "ok";
    }

    public function f4(){
        $this->myservice->log("this is my messaeg using constructor DI");
    }

}
