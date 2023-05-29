<?php

namespace App\Http\Controllers;

use App\Models\Academy;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\AcademiesRequest;
use Illuminate\Support\Facades\Storage;

class AcademyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function storeImage(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . rand(0,9999999) . now() . '.' . $extension;
    
            $request->file('upload')->move(public_path('media'), $fileName);
    
            $url = asset('media/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
        }
    }
    public function index()
    {
        return view('academy.index', [
            'academies' => Academy::latest()->get(),
        ]);
    }

    public function store(AcademiesRequest $request)
    {
        Academy::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title.rand()),
            'thumbnail' => $request->thumbnail,
            'description' => $request->description,
        ]);

     return back()->with('success', 'New academy materials created successfully.');
    }

    public function show($slug)
    {
        Academy::whereSlug($slug)->first();

        return view('academy.show', [
            'academy' => Academy::whereSlug($slug)->first()

        ]);
    }

    public function update(AcademiesRequest $request, $slug)
    {
        $academy = Academy::where('slug', $slug)->firstOrFail();

        $academy->slug = Str::slug($request->title.rand());
        $academy->title = $request->title;
        $academy->thumbnail = $request->thumbnail;
        $academy->description = $request->description;
        $academy->save();

        return redirect()->route('academy')->with('success', 'Materials academy has updated.');
    }

    public function destroy($slug)
    {
        $academy = Academy::whereSlug($slug)->first();
        $academy->delete();

        return back()->with('success', 'Academy Materials deleted successfully.');
    }
}
