<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\User;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        // $Students=User::all();
        $Students=User::paginate(3);
        return view("index", compact('Students'));
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
    public function store(StudentRequest $request)
    {
        $request->validated();

        $storeStudent = $request;
        $fnm=$storeStudent->studentFName;
        $lnm=$storeStudent->studentLName;
        $em=$storeStudent->studentEmail;
        // dd($storeStudent->all(),$fnm,$lnm,$em);

        //store $storeStudent in db
        $user=new User();
        $user->fName=$fnm;
        $user->lName=$lnm;
        $user->email=$em;
        $user->save();

        // return redirect()->route("student.index",compact("id")); //error
        return redirect()->route("student.index")->with('success','you added student success');
    }

    /**
     * Display the specified resource.
     */

    //convention over confegration//

    public function show(string $id)
    //route model binding
    {
        // $singleStudent = ['id' => 1, 'fnm' => 'ali', 'lnm' => 'ahmed', 'em' => 'ali@gmail.com'];

        // $singleStudent=User::where('id',$id)->first(); //model object
        // $singleStudent=User::where('id',$id)->get(); //collection object
        // $singleStudent=User::find($id);
        $singleStudent=User::findOrFail($id);

        // if(is_null($singleStudent)){
        //     return redirect()->route('student.index');
        // }
        return view("show", compact("singleStudent"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user=User::findOrFail($id);
        return view("edit", compact("user"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request, string $id)
    {
        $request->validated();

        $student=$request;
        $fnm=$student->studentFName;
        $lnm=$student->studentLName;
        $em=$student->studentEmail;

        //edit this data with data in db by id
        $user=User::find($id);
        $user->update([
            'fName'=>$fnm,
            'lName'=>$lnm,
            'email'=>$em,
        ]);



        return redirect()->route("student.show",$user->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete row from db by id
        try {
            $student=User::findOrFail($id);
            $student->delete();
            return redirect()->route("student.index")->with('success', 'Student deleted successfully!');;
                } catch (\Exception $e) {
                    return redirect()->route("student.index")->with('error', 'Failed to delete student!');


        }

    }
}
