<?php

namespace App\Http\Controllers;

use App\Models\Academic;
use App\Models\Country;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
        $countries = Country::all();
        $academics = Academic::all();
        return view("index", ['students' => $students, 'countries' => $countries, 'academics' => $academics]);
    }

    
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'age' => 'required|numeric',
            'address' => 'required',
            'course' => 'required',
            'year' => 'required|numeric',
            'continent' => 'required',
            'country_name' => 'required',
            'capital' => 'required',
        ]);

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

        return redirect('/');
    }

    public function showCountries()
    {
        $countries = Country::all();
        return view("index", ['countries' => $countries]);
    }

    public function showAcademics()
    {
        $academics = Academic::all();
        return view("index", ['academics' => $academics]);
    }

    public function edit(Student $student){
        return view('Edit', compact('student'));
    }

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
