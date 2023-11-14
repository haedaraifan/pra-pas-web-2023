<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HandphoneController;
use App\Http\Controllers\LaptopController;

class HomeController extends Controller
{
    public function index(HandphoneController $handphoneController, LaptopController $laptopController)
    {
        $handphones = $handphoneController->index()['handphones']->take(2);
        $laptops = $laptopController->index()['laptops']->take(2);
        
        return view('web/sections/home/home', [
            "title" => "home",
            "handphones" => $handphones, 
            "laptops" => $laptops, 
        ]);
    }
}
