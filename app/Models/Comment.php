<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = "comments";

    public function User(){
        return $this->hasOne(User::class, 'id', 'user');
    }

    public function Place(){
        return $this->hasOne(Place::class, 'id', 'place');
    }
}
