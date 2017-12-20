<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
    protected $table = 'user_groups';
    protected $fillable = array('name');

    public function users()
    {
    	return $this->hasMany('User');
    }
}
