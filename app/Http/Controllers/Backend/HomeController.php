<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;


class HomeController extends Controller
{
    public function Dashboard()
    {
        $Aboutus = AboutUs::all()->first();
        return view('home', compact('Aboutus'));
    }
  
}
