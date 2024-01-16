<?php

namespace Ophaant\Survey\Http\Controllers;

use App\Http\Controllers\Controller;

class SurveyController extends Controller
{
    public function index()
    {
        return view('survey::survey-index');
    }

    public function test()
    {
        return view('survey::test');
    }
}
