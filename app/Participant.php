<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

class Participant extends Model
{
    use Sortable;
    use SoftDeletes;

    protected $guarded = [];

    public function attend(){
        $this->hasOne(Attendance::class);
    }
}
