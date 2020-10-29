<?php

namespace App\Http\Controllers\Frontend\Welcome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class WelcomeController extends Controller
{

    /**
     * @param Request $request
     *
     * @return [type]
     */
    public function index(Request $request)
    {
        //
        $faces = array();

        for ($i = 1; $i <= 50; $i++) {
            $rnd = rand(0, 99);
            $who = ($rnd >= 50) ? 'women' : 'men';
            $urlToFace = 'https://randomuser.me/api/portraits/thumb/' . $who . '/' . $rnd . '.jpg';
            $faces[] = $urlToFace;
        }
        //

        //
        $projects = Project::take(5)->get();


        $view_data = array(
            'faces' => $faces,
            'projects' => $projects
        );

        return view('frontend.welcome.layout', $view_data);
    }
}
