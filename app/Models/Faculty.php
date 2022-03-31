<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $table = 'facultys';

    protected $primaryKey = 'id';

    public function setudent() {
        return $this->hasMany('App\Models\Student', 'facultys_id', 'id');
    }

//    protected $fillable = [
//        'title'
//    ];

    protected $guarded = [];
}
