<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentAPIController extends Controller
{
    
    public function index(){
        $students = Student::with('academic','country')->get();
        $students->makeHidden(['created_at', 'updated_at']);
        return response()->json(['students' => $students]);
    }

    public function store(Request $request){
        $student = Student::create($request->all());

        $academic = $student->academic()->create([
            'course' => $request->input('academic.course'),
            'year' => $request->input('academic.year')
        ]);

        $country = $student->country()->create([
            'continent' => $request->input('country.continent'),
            'country_name' => $request->input('country.country_name'),
            'capital' => $request->input('country.capital')
        ]);

        $student->makeHidden(['created_at', 'updated_at']);
        $academic->makeHidden(['created_at', 'updated_at']);
        $country->makeHidden(['created_at', 'updated_at']);

        return response()->json([
            'student' => $student,
            'academic' => $academic,
            'country' => $country
        ]);
    }

    /*
        Update data
    */
    public function update(Request $request, $id){
        $student = Student::find($id);
        $student->update($request->all());

        $student->academic()->update([
            'course' => $request->input('academic.course'),
            'year' => $request->input('academic.year')
        ]);

        $student->country()->update([
            'continent' => $request->input('country.continent'),
            'country_name' => $request->input('country.country_name'),
            'capital' => $request->input('country.capital')
        ]);

        return response()->json(['student' => $student]);
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
}
