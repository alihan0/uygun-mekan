<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $table = "places";

    public function MainCategory(){
        return $this->hasONe(Categories::class, 'id', 'category');
    }
    public function Features()
    {
        return $this->hasMany(FeatureAttachment::class, 'place', 'id');
    }

    public function Stars(){
        return $this->hasMany(StarRating::class, 'place', 'id');
    }

    public function Comments(){
        return $this->hasMany(Comment::class, 'place', 'id')->where('status',2);
    }

    public function Owner(){
        return $this->hasOne(User::class, 'id', 'owner');
    }


}
