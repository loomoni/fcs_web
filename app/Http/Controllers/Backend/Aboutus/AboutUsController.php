<?php

namespace App\Http\Controllers\Backend\Aboutus;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $data = AboutUs::all();
        return view('backend.AboutUs.index', compact('data'));
    }

    public function Create()
    {
        return view('backend.AboutUs.create');
    }
}