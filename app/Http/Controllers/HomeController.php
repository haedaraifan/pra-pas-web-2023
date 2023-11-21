<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HandphoneController;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\SmartWatchController;

class HomeController extends Controller
{
    public function index(HandphoneController $handphoneController, LaptopController $laptopController, SmartWatchController $smartWatchController)
    {
        $handphones = $handphoneController->index()['handphones']->take(2);
        $laptops = $laptopController->index()['laptops']->take(2);
        $smartWatches = $smartWatchController->index()['smartWatches']->take(2);
        
        return view('web/sections/home/home', [
            "title" => "home",
            "handphones" => $handphones, 
            "laptops" => $laptops,
            "smartWatches" => $smartWatches,
        ]);
    }
}
