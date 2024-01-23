<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /*
        Show data in view, returns index view
    */
    public function show(){
        $students = Student::with('academic', 'country')->get();
        return view("Index")->with("students", $students);
    }

    /*
        Displays complete student data.
    */
    public function display(Student $student){
        return view('showStudent', compact('student'));
    }

    public function index(){
        $students = Student::with('academic', 'country')->get();
        return response()->json(['students'=>$students]);
    }

    /*
        Create new data
    */
    public function store(Request $request){
        $student = Student::create($request->all());

        $student->academic()->create([
            'course' => $request->course,
            'year' => $request->year
        ]);

        $student->country()->create([
            'continent' => $request->continent,
            'country_name' => $request->country_name,
            'capital' => $request->capital
        ]);

        return redirect('/')->with('message', 'Student data created');
    }

    /*
        Edit data in view
    */
    public function edit(Student $student){
        return view('Edit', compact('student'));
    }


    /*
        Update data and return to index
    */
    public function update(Request $request, $id){
        $student = Student::find($id);
        $student->update($request->all());

        $student->academic()->update([
            'course' => $request->course,
            'year' => $request->year
        ]);

        $student->country()->update([
            'continent' => $request->continent,
            'country_name' => $request->country_name,
            'capital' => $request->capital
        ]);

        return redirect('/')->with('message', 'Student data updated');
    }


    /*
        Update data
    */
    public function put(Request $request, $id){
        $student = Student::find($id);
        $student->update($request->all());

        $student->academic()->update([
            'course' => $request->course,
            'year' => $request->year
        ]);

        $student->country()->update([
            'continent' => $request->continent,
            'country_name' => $request->country_name,
            'capital' => $request->capital
        ]);

        return response()->json(['student'=>$student]);
    }

    /*
        Delete data
    */
    public function destroy($id){
        $student = Student::find($id);
        $student->academic()->delete();
        $student->country()->delete();
        $student->delete();
        return response()->json(["message"=>"Succssfully deleted student record."]);
    }

    /*
        Delete data in view
    */
    public function delete($id){
        $student = Student::find($id);
        $student->academic()->delete();
        $student->country()->delete();
        $student->delete();

        return redirect('/')->with('message', 'Student data deleted');
    }
}
