<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    //
    //protected $table = 'facilities';

    protected $fillable = ['building', 'space', 'facility_department_code'];

}
