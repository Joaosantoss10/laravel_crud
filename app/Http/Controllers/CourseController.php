<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Validator;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        
        return View('courses.index',[
            'courses' => $courses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('courses.create', [

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'course_code' => 'required|unique:courses',            
            'name' => 'required|unique:courses',     
            'total_ects' => 'required'
        ]);

        $courses = new Course;

        $courses->course_code = $request->course_code;
        $courses->name = $request->name;
        $courses->total_ects = $request->total_ects;

        $courses->save();   

        return redirect('/courses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $courses = Course::findOrFail($id);

        return view('courses.show', [
            'courses' => $courses
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $courses = Course::findOrFail($id);


        return view('courses.edit',[
            'courses' => $courses
        ]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $courses = Course::findOrFail($id);

        $courses->course_code = $request->course_code;
        $courses->name = $request->name;
        $courses->total_ects = $request->total_ects;


        $courses->save();   
       

        return redirect('/courses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $courses = Course::findOrFail($id);

        $courses->delete();

        return redirect('/courses');
    }
}
