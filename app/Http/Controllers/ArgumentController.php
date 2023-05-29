<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArgumentRequest;
use App\Models\Argument;
use App\Models\ArgumentCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ArgumentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('argument.index', [
            'arguments' => Argument::get(),
            'categories' => ArgumentCategory::get(),
        ]);
    }

    public function store(ArgumentRequest $request)
    {
        Argument::create([
            'title' => $request->title,
            'argument_category_id' => $request->argument_category_id,
            'slug' => Str::slug($request->title.rand()),
            'thumbnail' => $request->thumbnail,
            'description' => $request->description,
        ]);

     return back()->with('success', 'New argument materials created successfully.');
    }

    public function show($slug)
    {
        Argument::whereSlug($slug)->first();

        return view('argument.show', [
            'argument' => Argument::whereSlug($slug)->first(),
            'categories' => ArgumentCategory::get(),
        ]);
    }

    public function update(ArgumentRequest $request, $slug)
    {
        $argument = argument::where('slug', $slug)->firstOrFail();

        
        $argument->thumbnail = $request->thumbnail;
        $argument->slug = Str::slug($request->title.rand());
        $argument->title = $request->title;
        $argument->argument_category_id = $request->argument_category_id;
        $argument->description = $request->description;
        $argument->save();

        return redirect()->route('argument')->with('success', 'Materials argument has updated.');
    }

    public function destroy($slug)
    {
        $argument = argument::whereSlug($slug)->first();
        $argument->delete();

        return back()->with('success', 'argument Materials deleted successfully.');
    }

}
