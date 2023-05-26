<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonAndTutorRequest;
use App\Models\Personil;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PersonilController extends Controller
{
    public function index(){
        return view('personil.index', [
            'personils' => Personil::get()
        ]);
    }

    public function store(PersonAndTutorRequest $request)
    {
        $file = $request->file('image');
        $fileName = rand(0,9999999) . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('personil', $fileName, 'public');    
        
        Personil::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'image' => $filePath,
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

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = rand(0,9999999) . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('personil', $fileName, 'public');

            Storage::disk('public')->delete($personil->image);
            $personil->image = $filePath;
        }

        $personil->slug = Str::slug($request->name);
        $personil->name = $request->name;
        $personil->position = $request->position;
        $personil->description = $request->description;
        $personil->save();

        return redirect()->route('personil')->with('success', 'Person has updated.');
    }

    public function destroy($slug){
        $personils = Personil::whereSlug($slug)->first();
        Storage::disk('public')->delete($personils->image);
        $personils->delete();

        return back()->with('success', 'Successfully deleted');
    }
}
