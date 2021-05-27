<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebinarDay extends Model
{

    public function webinar(){

        return $this->hasMany(Webinar::class);
    }
}
