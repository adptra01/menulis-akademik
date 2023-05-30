<?php

namespace App\Http\Controllers;

use App\Models\Academy;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\AcademiesRequest;
use ArielMejiaDev\LarapexCharts\LarapexChart as LarapexChartsLarapexChart;

class AcademyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $posts = Academy::where('created_at', '>=', now()->subMonths(12))->get();
        $monthlyTotals = $posts->groupBy(function ($post) {
            return $post->created_at->format('F Y');
        })->map(function ($groupedPosts) {
            return $groupedPosts->count();
        });

        $months = [];
        $counts = [];
        foreach ($monthlyTotals as $month => $total) {
            $months[] = $month;
            $counts[] = $total;
        }

        $chart = (new LarapexChartsLarapexChart)->setType('area')
        ->setXAxis($months)
        ->setDataset([
            [
                'name'  =>  'Materi academik',
                'data'  =>  $counts
            ]
        ]);

        return view('academy.index', [
            'academies' => Academy::latest()->get(),
            'chart' => $chart
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
