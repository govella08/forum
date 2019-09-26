<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = false;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
