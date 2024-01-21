<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    use HasFactory;

    protected $fillable = [
        "name",
        "age",
        "address"
    ];

    public function academic(){
        return $this->hasOne(Academic::class, 'student_acad_id', 'id');
    }

    public function country(){
        return $this->hasOne(Country::class, 'student_country_id', 'id');
    }

}
