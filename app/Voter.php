<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voter extends Model
{
    protected $fillable = ['lname ', 'fname', 'mname', 'address', 'precnum', 'legend'];
}
