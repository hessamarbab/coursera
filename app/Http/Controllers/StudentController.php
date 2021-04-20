<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create(StudentRequest $request)
    {
        $data=$request->only('name','code');
        $course=Student::create($data);
        return response($course,200);
    }
}
