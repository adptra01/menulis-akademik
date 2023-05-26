<?php

namespace App\Http\Controllers;

use App\Models\Argument;
use Illuminate\Support\Str;
use App\Models\ArgumentCategory;
use Illuminate\Http\Request;

class ArgumentCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('argument_categories.index', [
            'categories' => ArgumentCategory::get(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
           'name' => 'required|min:5',
           'description' => 'required|min:10'
        ]);
        ArgumentCategory::create([
            'slug' => Str::slug($request->name),
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return back()->with('success', 'New argument categories created successfully');
    }

    public function show($slug)
    {
        $key = ArgumentCategory::whereslug($slug)->first();
        // $item = Argument::whereId($key->id)->get();
        // dd($item);
        return view('argument_categories.show', [
            'category' => ArgumentCategory::whereSlug($slug)->first(),
            'arguments' => Argument::where('argument_category_id', $key->id)->get(),
        ]);
    }

    public function Update($slug, Request $request)
    {
        $request->validate([
            'name' => 'required|min:5',
            'description' => 'required|min:10'
         ]);
        ArgumentCategory::whereSlug($slug)->update([
            'slug' => Str::slug($request->name),
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('argumentCategory')->with('success', 'Argument Categories has updated');
    }
}
