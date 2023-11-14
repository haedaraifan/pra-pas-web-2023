<?php

namespace App\Http\Controllers;

use App\Models\Handphone;
use Illuminate\Http\Request;

class HandphoneController extends Controller
{
    public function index()
    {
        return view('web/sections/handphone/all', [
            "title" => "handphone",
            "handphones" => Handphone::all()
        ]);
    }

    public function show($handphone)
    {
        return view('web/sections/handphone/detail', [
            "title" => "detail handphone",
            "handphone" => Handphone::find($handphone)
        ]);
    }
}
