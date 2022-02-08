<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Score;
use App\Models\Student;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function create(Request $request){
        // dd($request->all());

        $request->validate([
            'name' => ['required'],
            'address' => ['required'],
            'phone' => ['required']
        ]);

        $student = new Student();
        $student->name = $request->name;
        $student->address = $request->address;
        $student->phone = $request->phone;
        $student->save();

        foreach($request->scores as $key => $value){
            $data = array(
                'student_id' => $student->id,
                'course' => $value['course'],
                'score' => $value['score']
            );

            $score = Score::create($data);
        }

        return response()->json([
            'message' => 'success',
            'student' => $student,
            'score' => $score
        ], 200);
    }
}
