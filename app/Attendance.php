<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attendance extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function participant(){
        return $this->belongsTo(Participant::class);
    }
}
