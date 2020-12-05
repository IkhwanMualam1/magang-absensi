<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Tb_user extends Authenticatable
{
    protected $table = 'tb_user';
    protected $fillable = [
        'username', 'password', 'level'
    ];
    protected $primary_key = 'id_user';
}
