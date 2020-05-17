<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileHistory extends Model
{
    protected $guared = array('id');
    
    public static $rules = array(
    'profile_id' => 'required',
    'edited_at' => 'required',
    );
}
