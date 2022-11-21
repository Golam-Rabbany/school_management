<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    public function group_rel(){
        return $this->hasMany(Studnet::class, 'batch_id', 'id');
    }

    public function group_class(){
        return $this->hasOne(StudentClass::class, 'id', 'class_id');
    }
    public function group_shift(){
        return $this->hasOne(Shift::class, 'id', 'shift_id');
    }
    
}
