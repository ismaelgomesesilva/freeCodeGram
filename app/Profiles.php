<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    protected $guarded = [];
    
    public function profileImage(){
        $pathImage = ($this->image)? $this->image : "profile/5Xk5hsog9OoWJwVO3wnILjjYZzWe0k7V77SU6PIx.png";
        return "/storage/". $pathImage;
    }

    public function followers(){
        return $this->belongsToMany(User::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
