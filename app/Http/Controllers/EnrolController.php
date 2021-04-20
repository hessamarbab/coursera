<?php

namespace App\Http\Controllers;

use App\Http\Requests\EnrolRequest;
use App\Models\Course;
use App\Models\Enrol;
use Illuminate\Http\Request;

class EnrolController extends Controller
{
    public function create(EnrolRequest $request)
    {
        $data=$request->only('student_id','course_id');
        $course=Course::find($data['course_id']);
        if($course->students()->count()>=$course->capacity){
            abort("capacity filled");
        }
        if($course->students()->find($data['student_id'])){
            abort("you had enrolled before");
        }

        $enrol=Enrol::create($data);
        return $enrol;
    }
}
