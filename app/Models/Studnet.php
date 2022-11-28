<?php

namespace App\Models;

use Illuminate\Bus\Batch;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studnet extends Model
{
    use HasFactory;

    public function batch_student(){
        return $this->hasOne(Group::class, 'id', 'batch_id');
    }
    public function batch_class(){
        return $this->hasOne(StudentClass::class, 'id', 'class_id');
    }
    public function batch_shift(){
        return $this->hasOne(Shift::class, 'id', 'shift_id');
    }

    // allstdntcontroller subject
    // public function class_group(){
    //     return $this->hasOne(StudentClass::class, 'id', 'class_id');
    // }

    // public function group_student(){
    //     return $this->hasOne(Group::class, 'id', 'batch_id');
    // }

    // public function class_shift(){
    //     return $this->hasOne(Shift::class, 'class_id', 'id');
    // }

    
    
}
