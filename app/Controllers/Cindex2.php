<?php

namespace App\Controllers;

class Cindex2 extends BaseController
{
    public function compras(): string
    {
        return view('VistasLocales/Compras/indexcompras');
    }
}
