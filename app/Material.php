<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
        'id',
        'code',
        'name',
        'unit_id',
        'group_id'
    ];
}