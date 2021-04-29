<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

//class Admin extends Model
//{
////    protected $fillable=['fullname','email','password','role'];
//    use Notifiable;
//
//    protected $guard = 'admin';
//
//    protected $fillable = [
//        'fullname', 'email', 'password',
//    ];
//
//    protected $hidden = [
//        'password', 'remember_token',
//    ];
//}

class Admin extends Authenticatable
{
    use Notifiable;

    protected $guard = 'admin';

    protected $fillable = [
        'fullname', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
