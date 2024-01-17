<?php

namespace Ophaant\Survey\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Ophaant\Survey\Models\Audit;

class SurveyController extends Controller
{
    public function index()
    {
        $audits = Audit::orderBy('created_at', 'desc')->paginate(1);
        return view('survey::survey-index', compact('audits'));
    }

    public function test()
    {
        return view('survey::test');
    }

    public function add()
    {
        return view('survey::survey-add');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3'
        ]);

        if ($validator->fails()) {
            return redirect(route('add-survey'))
                ->withErrors($validator)
                ->withInput();
        }

        $published = false;

        if ($request->has('is_published')) {
            $published = true;
        }
        Audit::create([
            'name' => $request->input('name'),
            'is_published' => $published,
            'user_id' => 1,
            'checklist_id' => 1
        ]);

        return redirect()->back();
    }
}
