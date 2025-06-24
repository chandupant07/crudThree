<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    //
    public function index()
    {
        return view('layout.index');
    }

    public function create()
    {
        return view('layout.create');
    }
    // insert record in database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'img' => 'nullable|image|mimes:jpg,png,jpeg',
        ]);

        $imgName = null;
        if ($request->hasFile('img')) {
            $imgName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('images'), $imgName);
        }

        //import student model
        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'img' => $imgName,
        ]);

        return redirect()->route('student.index')->with("success", 'Data Save Successfully');
    }


}
