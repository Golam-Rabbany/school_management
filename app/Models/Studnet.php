<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studnet extends Model
{
    use HasFactory;

    public function group_student(){
        return $this->hasOne(Group::class, 'id', 'batch_id');
    }

    // allstdntcontroller subject
    public function class_group(){
        return $this->hasOne(StudentClass::class, 'id', 'class_id');
    }
}
