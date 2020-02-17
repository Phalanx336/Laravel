<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    protected $fillable =[
        'hotel_id',
        'type',
        'description',
        'price',
        'image',
    ];

    public function rooms() {
        return $this->belongsTo('App\Models\Hotel');
    }
}
