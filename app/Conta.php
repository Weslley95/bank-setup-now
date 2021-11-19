<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    // Conta = Temporada
    
    protected $table = 'contas';
    //public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'saldo_bsn',
        'nome_chave_bsn'
    ];
    
    // User = Temporada
    public function conta(){
        
        // Class Dados(user) tem relação com Conta
        return $this->hasOne(User::class);
    }
}
