<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function index()
    {
        return view('layout.course');
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'instructor' => 'required',
            'image' => 'required',
        ]);

        $imgName = null;
        if ($request->hasFile('image')) {
            $imgName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imgName);
        }
        Course::create([
            'name' => $request->name,
            'price' => $request->price,
            'instructor' => $request->instructor,
            'image' => $imgName
        ]);
        return redirect()->route('layout.showcourse')->with('success', 'Data Save Successfully');
    }
}
