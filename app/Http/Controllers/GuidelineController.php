<?php

namespace App\Http\Controllers;

use App\Models\Guideline;
use Illuminate\Http\Request;

class GuidelineController extends Controller
{
    public function index()
    {
        return view('guideline.index', [
            'guideline' => Guideline::first(),
        ]);
    }

    public function update(Request $request, $id)
    {
        Guideline::whereId($id)->update($request->only('description'));

        return back()->with('success', 'Your guideline was updated successfully');
    }
}
