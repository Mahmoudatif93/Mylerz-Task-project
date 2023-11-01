<?php

namespace App\Http\Controllers;
use App\Models\IoTData;
class HomeController extends Controller
{
    public function index()
    {

        $chartData = IoTData::latest()->take(10)->get();
        return view('home', compact('chartData'));

    }

}
