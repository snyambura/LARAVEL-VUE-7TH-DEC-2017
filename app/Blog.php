<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    public function blogs()
    {
        return $this->hasMany(User::class, 'id');
    }

}
