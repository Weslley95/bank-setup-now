<?php

namespace App;

use App\Conta;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    
    protected $table = 'users';
    public $timestamps = false;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
        'email',
        'password',
        'profile'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    //protected $hidden = [
    //    'senha', 'remember_token',
    //];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    //protected $casts = [
    //    'email_verified_at' => 'datetime',
    //];
    
    // User = Temporada
    public function conta(){
        
        // Class Dados(user) tem relação com Conta
        return $this->hasOne(Conta::class);
    }
}
