<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaunaName extends Model
{
    // use HasFactory;
    protected $guarded = array('id');

    public static $rules = array(
        'saunaname' => 'required'
    );

}
