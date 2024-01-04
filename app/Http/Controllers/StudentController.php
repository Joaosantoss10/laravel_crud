<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        
        return View('students.index',[
            'students' => $students
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('students.create', [

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

       /* $validator = Validator::make($request->all(),[
            'name' => ['required','php max:255'],
            'email' => ['required', 'unique:students'],
        ]);

        if($validator->fails()) {
            dd($validator->messages());
        }
       */ 

      $request->validate([
        'name' => 'required|max:255',
        'student_code' => 'required|unique:students',
        'citizen_card_number' => 'required|unique:students',
        'tax_identification_number' => 'required|unique:students',
        'email' => 'required|unique:students',
        'postal_code' => 'required|max:8'
    ]);
   


        $student = new Student;

        $student->name = $request->name;
        $student->student_code = $request->student_code;
        $student->citizen_card_number = $request->citizen_card_number;
        $student->tax_identification_number = $request->tax_identification_number;
        $student->email = $request->email;
        $student->address1 = $request->address1;
        $student->address2 = $request->address2;
        $student->postal_code = $request->postal_code;
        $student->locality = $request->locality;

        $student->save();   

        return redirect('/students');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::findOrFail($id);

        return view('students.show', [
            'student' => $student
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
        $student = Student::findOrFail($id);

        return view('students.edit',[
            'student' => $student
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
        $student = Student::findOrFail($id);

        $student->name = $request->name;
        $student->student_code = $request->student_code;
        $student->citizen_card_number = $request->citizen_card_number;
        $student->tax_identification_number = $request->tax_identification_number;
        $student->email = $request->email;
        $student->address1 = $request->address1;
        $student->address2 = $request->address2;
        $student->postal_code = $request->postal_code;
        $student->locality = $request->locality;

        $student->save();   

        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);

        $student->delete();

        return redirect('/students');
    }
}
