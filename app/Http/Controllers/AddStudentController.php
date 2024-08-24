<?php

namespace App\Http\Controllers;

use App\Models\AddStudent;
use Illuminate\Http\Request;

class AddStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = AddStudent::all();
        return view('atendance', ['students' => $students]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new AddStudent();
        $student->name = $request->name;
        $student->rollNo = $request->rollno;
        $student->gender = $request->gender;
        $student->dob = $request->dob;
        $student->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AddStudent  $addStudent
     * @return \Illuminate\Http\Response
     */
    public function show(AddStudent $addStudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AddStudent  $addStudent
     * @return \Illuminate\Http\Response
     */
    public function edit(AddStudent $addStudent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AddStudent  $addStudent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AddStudent $addStudent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AddStudent  $addStudent
     * @return \Illuminate\Http\Response
     */
    public function destroy(AddStudent $addStudent)
    {
        //
    }
}
