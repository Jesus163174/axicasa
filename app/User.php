<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    protected  $table = 'users';
    use Notifiable;
    protected $fillable = [
        'nombre','apellidos', 'email', 'password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function agregar($request){
        return User::create($request);
    }
    public function editar($usuario,$request){
        return $usuario->fill($request)->save();
    }

    public function scopeUsers($query,$currentId){
        return $query->where('id','<>',$currentId)->orderBy('created_at','desc');
    }
}
