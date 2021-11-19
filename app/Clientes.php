<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Description of Dados
 *
 * @author wesll
 */
class Clientes extends Model {
    
    protected $table = 'clientes';
    //public $timestamps = false;
    
    // Atributos a serem enviados ao BD
    protected $fillable = [
        'nome',
        'login',
        'email',
        'senha'
        ];
    
    // User = Temporada
    public function conta(){
        
        // Class Dados(user) tem relação com Conta
        return $this->hasMany(Conta::class);
    }
}
