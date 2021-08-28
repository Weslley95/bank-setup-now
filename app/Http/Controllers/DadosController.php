<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Description of DadosController
 *
 * @author wes
 */
class DadosController {
    
    public function index(Request $request) {
        
        $dados = [
        'Corinthians',
        'PSG',
        'Flamengo'
        ];
    
        return view('dados.index', compact('dados'));
    }
    
    
    
}
