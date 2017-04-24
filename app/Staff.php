<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //
    protected $fillable=[
        'name',
        'id',
        'address',
        'zip',
        'email',
        'cell_phone'
    ];

     public function mentor() {
        return $this->belongsTo('App\Mentor');
        }
}
