<?php

namespace App\Http\Controllers;

use App\Models\SmartWatch;
use Illuminate\Http\Request;

class SmartWatchController extends Controller
{
    public function index()
    {
        return view('web/sections/smartwatch/all', [
            "title" => "smart watch",
            "smartWatches" => SmartWatch::all()
        ]);
    }

    public function show($smartWatch)
    {
        return view('web/sections/smartwatch/detail', [
            "title" => "detail smartwatch",
            "smartWatch" => SmartWatch::find($smartWatch)
        ]);
    }
}
