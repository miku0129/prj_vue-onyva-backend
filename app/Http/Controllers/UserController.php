<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student; 

use Validator;

class UserController extends Controller
{
    public function index()
    {
        // $user = User::all(); 

        // $data = [
        //     'status'=>200, 
        //     'user'=>$user
        // ]; 

        // return response()->json($data, 200); 
        return response()->json(["hello php"], 200); 
    }

    // public function get_a($id)    {
    //         $student = Student::find($id); 

    //         $data=[
    //             'status'=>200, 
    //             'student'=>["name"=>$student->name, "email"=>$student->email, "phone"=>$student->phone]
    //         ];

    //         return response()->json($data, 200);

    // }


    // public function upload(Request $request)
    // {
    //     $validator = Validator::make($request->all(), 
    //     [
    //         'name'=>'required',
    //         'email'=>'required|email'
    //     ]);

    //     if($validator->fails())
    //     {
    //         $data=[
    //             'status'=>422, 
    //             'message'=>$validator->messages()
    //         ];
    //         return response()->json($data, 422); 
    //     }

    //     else 
    //     {
    //         $student = new Student; 

    //         $student->name=$request->name; 
    //         $student->email=$request->email; 
    //         $student->phone=$request->phone; 

    //         $student->save(); 

    //         $data=[
    //             'status'=>201, 
    //             'message'=>'Data uploaded successfully'
    //         ];

    //         return response()->json($data, 201);

    //     }
    // }

    // public function edit(Request $request,$id)    {
    //     $validator = Validator::make($request->all(), 
    //     [
    //         'name'=>'required',
    //         'email'=>'required|email'
    //     ]);

    //     if($validator->fails())
    //     {
    //         $data=[
    //             'status'=>422, 
    //             'message'=>$validator->messages()
    //         ];
    //         return response()->json($data, 422); 
    //     }

    //     else 
    //     {
    //         $student = Student::find($id); 

    //         $student->name=$request->name; 
    //         $student->email=$request->email; 
    //         $student->phone=$request->phone; 

    //         $student->save(); 

    //         $data=[
    //             'status'=>200, 
    //             'message'=>'Data updated successfully'
    //         ];

    //         return response()->json($data, 200);

    //     }
    // }

    // public function delete($id)
    // {
    //     $student=Student::find($id); 

    //     $student->delete(); 

    //     $data=
    //     [
    //         'status'=>200, 
    //         'message'=>'data deleted successfully'
    //     ];

    //     return response()->json($data, 200); 
    // }

}
