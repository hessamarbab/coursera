<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
         /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','code','capacity'
    ];
    public function students()
    {
        return $this->belongsToMany(Student::class, 'Enrol');
    }
}
