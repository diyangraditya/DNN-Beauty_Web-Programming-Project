<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class AkunPengguna extends Authenticatable implements AuthenticatableContract
{
    protected $table = 'akun_pengguna';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}

