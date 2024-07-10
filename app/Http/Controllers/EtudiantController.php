<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Etudiant; 

use Validator;

class EtudiantController extends Controller
{
    public function index()
    {
        $etudiant = Etudiant::all(); 

        $data = [
            'status'=>200, 
            'etudiant'=>$etudiant
        ]; 

        return response()->json($data, 200); 
    }

    public function get_a($id)    {
            $etudiant = Etudiant::find($id); 

            $data=[
                'status'=>200, 
                'etudiant'=>[
                "id"=>$etudiant->id, 
                "name"=>$etudiant->name, "email"=>$etudiant->email,         
                "fromWhen"=>$etudiant->fromWhen, 
                "myGoal"=>$etudiant->myGoal,
                "myMethod"=>$etudiant->myMethod,
        ]
            ];

            return response()->json($data, 200);

    }


    public function upload(Request $request)
    {
        $validator = Validator::make($request->all(), 
        [
            'name'=>'required',
            'email'=>'required|email',
        ]);

        if($validator->fails())
        {
            $data=[
                'status'=>422, 
                'message'=>$validator->messages()
            ];
            return response()->json($data, 422); 
        }

        else 
        {
            $etudiant = new Etudiant; 

            $etudiant->name=$request->name; 
            $etudiant->email=$request->email; 
            $etudiant->fromWhen=$request->fromWhen; 
            $etudiant->myGoal=$request->myGoal; 
            $etudiant->myMethod=$request->myMethod; 

            $etudiant->save(); 

            $data=[
                'status'=>201, 
                'message'=>'Data uploaded successfully',
                'id'=>$etudiant->id 
            ];

            return response()->json($data, 201);

        }
    }

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

    public function delete($id)
    {
        $etudiant=Etudiant::find($id); 

        $etudiant->delete(); 

        $data=
        [
            'status'=>200, 
            'message'=>'data deleted successfully'
        ];

        return response()->json($data, 200); 
    }

}
