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
}
