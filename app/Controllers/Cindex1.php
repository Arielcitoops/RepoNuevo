<?php

namespace App\Controllers;

class Cindex1 extends BaseController
{
    public function login(): string
    {
        return view('VistasLocales/Login/indexlogin');
    }
}
