<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // 
    public function create(){
        return view('students.create');
    }
    public function store(){
        dd(request()->all());
    }
    public function index(){
        // liste des students
        $students=[[
            'nom'=>'Doe',
            'prenom'=>'John',
            'age'=>25,
            'sexe'=>'male',
        ],[
            'nom'=>'grik',
            'prenom'=>'Jane',
            'age'=>22,
            'sexe'=>'female',
        ],[
            'nom'=>'fileston',
            'prenom'=>'Jack',
            'age'=>20,
            'sexe'=>'male',
        ],
        [
            'nom'=>'Doe',
            'prenom'=>'Jill',
            'age'=>18,
            'sexe'=>'female',
        ],
        [
            'nom'=>'dereck',
            'prenom'=>'Juliene',
            'age'=>18,
            'sexe'=>'female',
        ],
        [
            'nom'=>'bil',
            'prenom'=>'konsa',
            'age'=>18,
            'sexe'=>'male',
        ],
        [
            'nom'=>'Doe',
            'prenom'=>'eric',
            'age'=>18,
            'sexe'=>'female',
        ],

        ];
        return view('students.index',compact('students'));
    }

    public function show(Request $request){
        dd($request);

}
}
