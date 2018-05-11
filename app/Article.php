<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function owner(){

        return $this->belongsTo(User::class, 'user_id');
    }

    public function websites(){
        return $this->belongsToMany(Website::class);
    }
}
