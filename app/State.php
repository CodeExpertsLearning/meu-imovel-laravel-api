<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public function country()
    {
    	return $this->belongsTo(Country::class);
    }

    public function cities()
    {
    	return $this->hasMany(City::class);
    }

    public function adresses()
    {
    	return $this->hasMany(Address::class);
    }
}
