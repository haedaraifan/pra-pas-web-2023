<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use Illuminate\Http\Request;

class LaptopController extends Controller
{
    public function index()
    {
        return view('web/sections/laptop/all', [
            "title" => "laptop",
            "laptops" => Laptop::all()
        ]);
    }

    public function show($laptop)
    {
        return view('web/sections/laptop/detail', [
            "title" => "detail laptop",
            "laptop" => Laptop::find($laptop)
        ]);
    }
}
