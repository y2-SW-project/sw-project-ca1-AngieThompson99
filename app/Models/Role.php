<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public function users() // get the role and c heck the users that have that role
    // as Mo explained, we dont need to write the connect in sql
    // because we have this line, this will return the array of roles that the user has
    {
        return $this->belongsToMany('App\Models\User', 'user_role');
    }

}
