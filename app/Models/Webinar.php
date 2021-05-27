<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Webinar extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title',
        'first_name',
        'last_name',
        'email',
        'phone',
        'church_name',
        'webinar_session_id',
        'webinar_day_id',

    ];

    public function days(){

        return $this->belongsTo(WebinarDay::class);
    }
}
