<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','name'	,'surname',	'email',	'address',	'address2',	'phone',	'updated_at',	'created_at',	'goodids',	'goodnames',
    ];
}
