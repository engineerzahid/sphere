<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('frontend/pages/home');
    }

    public function healthcare()
    {
        return view('frontend/pages/healthcare');
    }

    public function tourism()
    {
        return view('frontend/pages/tourism');
    }

    public function projectManagement()
    {
        return view('frontend/pages/projectmanagement');
    }
    public function construction()
    {
        return view('frontend/pages/construction');
    }
    public function utilities()
    {
        return view('frontend/pages/utilities');
    }
    public function assets()
    {
        return view('frontend/pages/asset');
    }
    public function pricing()
    {
        return view('frontend/pages/pricing');
    }
    public function signin()
    {
        return view('frontend/pages/signin');
    }
    public function businessManagement()
    {
        return view('frontend/pages/business-management');
    }

    public function cyberSecurity()
    {
        return view('frontend/pages/cybersecurity');
    }


}
