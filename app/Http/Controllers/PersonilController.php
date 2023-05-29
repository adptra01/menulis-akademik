<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonAndTutorRequest;
use App\Models\Personil;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PersonilController extends Controller
{
    public function index(){
        return view('personil.index', [
            'personils' => Personil::get()
        ]);
    }

    public function store(PersonAndTutorRequest $request)
    {

        Personil::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name.rand()),
            'image' => $request->image,
            'position' => $request->position,
            'description' => $request->description,
        ]);

        return back()->with('success', 'New person added successfully');
        
    }

    public function show($slug)
    {
        $personil = Personil::whereSlug($slug)->first();
        return view('personil.show', [
            'personil' => $personil
        ]);
    }

    public function update(PersonAndTutorRequest $request, $slug)
    {
        $personil = Personil::where('slug', $slug)->firstOrFail();


        $personil->slug = Str::slug($request->name.rand());
        $personil->name = $request->name;
        $personil->image = $request->image;
        $personil->position = $request->position;
        $personil->description = $request->description;
        $personil->save();

        return redirect()->route('personil')->with('success', 'Person has updated.');
    }

    public function destroy($slug){
        $personils = Personil::whereSlug($slug)->first();
        $personils->delete();

        return back()->with('success', 'Successfully deleted');
    }
}
