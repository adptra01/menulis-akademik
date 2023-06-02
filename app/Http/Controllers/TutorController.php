<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonAndTutorRequest;
use App\Models\Tutor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class TutorController extends Controller
{
    public function index(){
        return view('tutor.index', [
            'tutors' => Tutor::get()
        ]);
    }

    public function store(PersonAndTutorRequest $request)
    {
       
        Tutor::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name.rand()),
            'image' => $request->image,
            'position' => $request->position,
        ]);

        return back()->with('success', 'New tutor added successfully');
        
    }

    public function show($slug)
    {
        $tutor = Tutor::whereSlug($slug)->first();
        return view('tutor.show', [
            'tutor' => $tutor
        ]);
    }

    public function update(PersonAndTutorRequest $request, $slug)
    {
        $tutor = Tutor::where('slug', $slug)->firstOrFail();
        $tutor->image = $request->image;
        $tutor->slug = Str::slug($request->name.rand());
        $tutor->name = $request->name;
        $tutor->position = $request->position;
        $tutor->save();

        return redirect()->route('tutor')->with('success', 'Person has updated.');
    }

    public function destroy($slug){
        $tutors = Tutor::whereSlug($slug)->first();
        $tutors->delete();

        return back()->with('success', 'Successfully deleted');
    }
}
