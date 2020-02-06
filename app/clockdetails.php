<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clockdetails extends Model
{
    protected $fillable =[
        'clockin',
        'clockout',
        'start',
        'end',
        'totaltimework',
        'totalbreak'];
        
}
