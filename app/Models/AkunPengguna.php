<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AkunPengguna extends Model
{
    protected $table = 'akun_pengguna';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    
}
