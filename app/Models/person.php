<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class person extends Model
{
    protected $table = 'person';
    protected $fillable = [
        'firstname',
        'lastname',
        'age',
        'address'
    ];
}
