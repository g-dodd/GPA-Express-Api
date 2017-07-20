<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Return all Students in the database
        return Student::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Creates and inserts a Student into the database. Returns the student object that was created afterwards.
        return Student::create([
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'dob' => $request->dob,
            'gpa' => $request->gpa
        ]);
    }
}
