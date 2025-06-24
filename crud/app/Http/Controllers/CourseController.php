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
            'name' => 'require',
            'price' => 'require',
            'instructor' => 'require',
            'image' => 'require',
        ]);

        Course::create();
    }
}
