<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RealStatePhoto extends Model
{
    protected $fillable = [
    	'photo', 'is_thumb'
    ];

    public function realState()
    {
    	return $this->belongsTo(RealState::class);
    }
}
