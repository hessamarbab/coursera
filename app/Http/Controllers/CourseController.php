<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function create(CourseRequest $request)
    {
        $data=$request->only('name','code','capacity');
        $course=Course::create($data);
        return response($course,200);
    }
}
