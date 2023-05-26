<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    
    public function index()
    {
        return view('about.index', [
            'about' => About::first(),
        ]);
    }

    public function update(Request $request, $id)
    {
        About::whereId($id)->update($request->only('description'));

        return back()->with('success', 'Your about was updated successfully');
    }

}
