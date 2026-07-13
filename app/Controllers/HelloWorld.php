<?php

namespace App\Controllers;

class HelloWorld extends BaseController{
    public function hallodunia()
    {
        return view('helloworld');
    }
    public function index()
    {
        return view('helloworld');
    }
}