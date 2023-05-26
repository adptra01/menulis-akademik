<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('service.index', [
            'service' => Service::first(),
        ]);
    }

    public function update(Request $request, $id)
    {
        Service::whereId($id)->update($request->only('description'));

        return back()->with('success', 'Your service was updated successfully');
    }
}
