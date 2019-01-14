<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'id',
        'name',
        'parent_group_id'
    ];

    /**
     * Get the childs groups for the group.
    */
    public function childs() {
        return $this->hasMany('App\Group', 'parent_group_id', 'id') ;
    }

    /**
     * Get the materials for the group.
    */
    public function materials() {
        return $this->hasMany('App\Material', 'group_id', 'id') ;
    }
}
