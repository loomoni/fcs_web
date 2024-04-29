<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\CoreValue;
use App\Models\ProcessThrough;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $Aboutus = AboutUs::where('type', 'About FCS')->first();
        $WorkLocation = AboutUs::where('type', 'Work Location')->first();
        $Mission = CoreValue::where('type', 'MISSION')->first();
        $Vission = CoreValue::where('type', 'VISION')->first();
        $processThrough = ProcessThrough::all();
        return view('frontend.components.Home.base', compact('Aboutus', 'Mission', 'Vission', 'WorkLocation', 'processThrough'));
    }

    public function AboutUs()
    {
        $Aboutus = AboutUs::all()->first();

        return view('frontend.components.aboutus.aboutUs', compact('Aboutus'));
    }

    public function OurGovernance()
    {
        return view('frontend.components.OurGovernance.OurGovernance');
    }

    public function Approach()
    {
        return view('frontend.components.OurApproach.Ourapproach');
    }

    public function GetInvolved()
    {
        return view('frontend.components.GetInvolved.getInvolved');
    }

    public function Media()
    {
        return view('frontend.components.Media.Media');
    }
}
