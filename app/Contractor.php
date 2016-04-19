<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contractor extends Model
{
    protected $fillable = [
        'firstname', 'lastname', 'email', 'title', 'city', 'state', 'postcode', 'country', 'photo', 'tel', 'looking'
    ];
}
