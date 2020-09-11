<?php

namespace App\Http\Controllers\Frontend\Welcome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    /**
     * @param Request $request
     *
     * @return [type]
     */
    public function index(Request $request)
    {
        $view_data = array();

        return view('frontend.welcome.layout', $view_data);
    }
}
