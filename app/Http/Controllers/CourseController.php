<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses=Course::paginate(5);
        // dd($courses);
        return view('course.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)
    {
        $course = new Course();
        $course->name = $request->courseName;
        $course->bio = $request->courseBio;
        // $course->certificate->name = $request->certificateName;
        $course->save();
        $course->certificate()->create([
            'name' =>$request->certificateName,
            // 'course_id' =>$course->id,
            // 'course_id'=>
        ]);

        return redirect()->route("course.index")->with('success','success addition');

    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
