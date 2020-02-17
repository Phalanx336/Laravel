<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    protected $fillable =[
        'user_id',
        'room_id',
        'num_of_guests',
        'arrival',
        'departure',
    ];

    public function rooms() {
        return $this->belongsTo('App\Models\Rooms');
        return $this->belongsTo('App\Models\User');
    }
}
