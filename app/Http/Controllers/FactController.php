<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class FactController extends Controller
{
    public function facture(){
        return View('facture');
    }
}
