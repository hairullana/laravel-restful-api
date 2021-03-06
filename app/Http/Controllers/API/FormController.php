<?php

namespace App\Http\Controllers\API;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class FormController extends Controller
{
    public function create(Request $request) {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required'
        ]);

        // dd($request->all());

        $student = new Student;
        $student->name = $request->name;
        $student->address = $request->address;
        $student->phone = $request->phone;
        $student->save();

        return response()->json([
            'message' => 'data successful added to database',
            'data' => $student
        ], 200);
    }

    public function logout(Request $request){
        $user = $request->user();
        $user->currentAccessToken()->delete();

        return response()->json([
            'message' => 'success'
        ], 200);
    }

    public function edit($id){
        $student = Student::find($id);
        
        return response()->json([
            'message' => 'success',
            'data' => $student
        ], 200);
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required'
        ]);

        $student = Student::find($id);

        $student->update([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone
        ]);

        return response()->json([
            'message' => 'success',
            'data' => $student
        ], 200);
    }

    public function delete($id){
        Student::find($id)->delete();

        return response()->json([
            'message' => 'success delete'
        ], 200);
    }
}
