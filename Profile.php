<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
public static $rules = array(
        'title' => 'required',
        'body' => 'required',
    );
}
