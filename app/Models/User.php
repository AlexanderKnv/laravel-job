<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use softDeletes;

    const ROLE_ADMIN = 0;
    const ROLE_READER = 1;

    public static function getRoles() {
        return [
            self::ROLE_ADMIN => 'Admin',
            self::ROLE_READER => 'Reader'
        ];
    }

    protected $table = 'users';
    protected $guarded = false;
}
