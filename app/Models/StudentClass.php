<?php

namespace App\Models;

use Illuminate\Bus\Batch;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
    use HasFactory;

    public function class_shift(){
        return $this->hasMany(Shift::class, 'class_id', 'id');
    }

    public function class_batch(){
        return $this->hasMany(Group::class, 'shift_id', 'id');
    }

    protected $casts =[
        'subject'=>'json',
    ];
}
