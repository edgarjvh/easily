<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parish extends Model
{
    protected $guarded = [];

    public function municipality(){
        return $this->belongsTo(Municipality::class);
    }
}
