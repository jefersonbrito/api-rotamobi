<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Driver extends Model 
{
//    use Authenticatable, Authorizable, HasFactory;

//    use DriverAttribute, DriverRelationship, DriverScope, SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'drivers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'cpf',
        'email',
        'cellphone',
        'lat',
        'lng',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];
}
