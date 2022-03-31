<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $primaryKey = 'id';

    public function faculty() {
        return $this->belongsTo('App\Models\Faculty', 'facultys_id', 'id');
    }
}
