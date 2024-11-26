<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $students = [
        //     'id'=>[1,2,3],
        //     'fnm'=>['ali','ahmed','waleed'],
        //     'lnm'=>['ahmed','ali','sayed'],
        //     'em'=>['ali@gmail.com','ahmed@gmail.com','waleed@gmail.com'],
        // ];

        //mysqli_fetch_assoc

        $students = [
            ['id' => 1, 'fnm' => 'ali', 'lnm' => 'ahmed', 'em' => 'ali@gmail.com'],
            ['id' => 2, 'fnm' => 'ali', 'lnm' => 'ahmed', 'em' => 'ali@gmail.com'],
            ['id' => 3, 'fnm' => 'ali', 'lnm' => 'ahmed', 'em' => 'ali@gmail.com'],
            ['id' => 4, 'fnm' => 'ali', 'lnm' => 'ahmed', 'em' => 'ali@gmail.com'],
        ];
        return view("index", compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $storeStudent = $request;
        // $fnm=$storeStudent->studentFName;
        // $lnm=$storeStudent->studentLName;
        // $em=$storeStudent->studentEmail;
        // dd($storeStudent->all(),$fnm,$lnm,$em);

        //store $storeStudent in db

        // return redirect()->route("student.index",compact("id")); //error
        return redirect()->route("student.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $singleStudent = ['id' => 1, 'fnm' => 'ali', 'lnm' => 'ahmed', 'em' => 'ali@gmail.com'];
        return view("show", compact("singleStudent"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view("edit", compact("id"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request);

        // $fnm=$request->studentFName;
        // $lnm=$request->studentLName;
        // $em=$request->studentEmail;
        // dd($fnm,$lnm,$em);

        //edit this data with data in db by id


        return redirect()->route("student.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete row from db by id
        return redirect()->route("student.index", compact('id'));
    }
}
