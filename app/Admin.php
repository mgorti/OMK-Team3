<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    protected $fillable=[
        'id',
        'name',
        'email',
        'address',
        'zip',
        'cell_phone'
    ];

    public function mentors() {
        return $this->hasMany('App\Mentor');
        }

    public function students() {
        return $this->hasMany('App\Student');
        }

    public function staffs() {
        return $this->hasMany('App\Staff');
        }

}