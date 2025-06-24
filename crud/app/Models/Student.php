<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Request;

class Student extends Model
{
    //show student records
    protected $fillable = ['name', 'email', 'phone', 'img'];
}
