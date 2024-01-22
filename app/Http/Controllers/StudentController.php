<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /*
    Show database in view
    */
    public function show(){
        $students = Student::with('academic', 'country')->get();
        return view("index")->with("students", $students);
    }

    public function index(){
        $students = Student::with('academic', 'country')->get();
        return response()->json(['students'=>$students]);
    }

    public function store(Request $request){
        $student = Student::create($request->all());
        $student->academic()->create($request->input('academic'));
        $student->country()->create($request->input('country'));
        return response()->json($student, 201);
    }

    public function update(Request $request, $id){
        $student = Student::find($id);
        $student->update($request->all());
        $student->academic()->update($request->input('academic'));
        $student->country()->update($request->input('country'));
        return response()->json(['student'=>$student]);
    }

    public function destroy($id){
        $student = Student::find($id);
        $student->academic()->delete();
        $student->country()->delete();
        $student->delete();
        return response()->json(["message"=>"Succssfully deleted student record."]);
    }
}
