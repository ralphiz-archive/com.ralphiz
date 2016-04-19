<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contractor extends Model
{
    protected $fillable = [
        'contractor_firstname', 'contractor_lastname', 'contractor_email'
    ];
}
