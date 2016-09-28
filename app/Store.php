<?php

namespace App;

use Illuminate\Notifications\Notifiable;

class Store extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','description'
    ];

}
