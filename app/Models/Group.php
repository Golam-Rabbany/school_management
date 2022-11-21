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
}
