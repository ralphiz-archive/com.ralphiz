<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contractor extends Model
{
    protected $fillable = [
        'users_id', 'title', 'city', 'state', 'postcode', 'country', 'photo', 'tel', 'looking'
    ];

    /**
     * Get the user that owns the contractor
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}