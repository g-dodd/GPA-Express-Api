<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    
    public $timestamps = false; // We set this variable to false so that this model does not try to do any timestamp entries when inserting the model into the database table
    protected $fillable = ['first_name', 'last_name', 'dob', 'gpa']; // This variable contains an array of properties in which we can mass assign for this model
}
