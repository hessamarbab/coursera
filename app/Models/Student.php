<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
         /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','code'
    ];
    public function students()
    {
        return $this->belongsToMany(Student::class, 'enrol');
    }
}
