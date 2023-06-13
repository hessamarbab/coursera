<?php

namespace App\Http\Controllers;

use App\Http\Requests\EnrolRequest;
use App\Models\Course;
use App\Models\Enrol;
use DB;
use Exception;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

class EnrolController extends Controller
{
    public function create(EnrolRequest $request)
    {
        $data=$request->only('student_id','course_id');

        return DB::transaction(function() use ($data)
            {
                $course=Course::where(["id"=>$data['course_id']])->lockForUpdate()->first();
                if($course->students()->where(['students.id'=>$data['student_id']])->exists()){
                    throw new HttpException(400,"you had enrolled before");
                }
                if($course->students()->count()>=$course->capacity){
                    throw new HttpException(400,"capacity filled");
                }


                $enrol=Enrol::create($data);

                return $enrol;
            });
    }
}
