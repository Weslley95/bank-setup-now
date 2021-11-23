<?php

/**
 * Glossary module version information
 *
 * @api AwesomeAPI
 * API para cotações de moedas
 */

namespace App\Http\Controllers;

class EconomiaController {

    /**
     * URL API de Economia
     * @var string
     */
    const BASE_URL = 'https://economia.awesomeapi.com.br/json/';

    /**
     * Método para realizar consultas em tempo real
     * 
     * @return array
     */
    public function consultarCotacao() {

        $btcs =  $this->get('last/BTC-BRL');
        $usds =  $this->get('last/USD-BRL');
        $eurs =  $this->get('last/EUR-BRL');
        $brlts =  $this->get('last/USD-BRLT');

        return view('economia.economia', compact('btcs', 'usds', 'eurs', 'brlts'));

    }

    /**
     * Método para realizar consultas de fechamento das moedas
     * 
     * @return array
     */
    public function consultarFechamento() {
        $btcs =  $this->get('daily/BTC-BRL/5');
        $usds =  $this->get('daily/USD-BRL/5');
        $eurs =  $this->get('daily/EUR-BRL/5');
        $brlts =  $this->get('daily/USD-BRLT/5');

        return view('economia.close', compact('btcs', 'usds', 'eurs', 'brlts'));

    }

    /**
     * Método para requisitar a API de economia
     * @param string $resource
     * @return array
     */
    public function get($resource) {

        // Endpoint (URL + $resource)
        $endpoint = self::BASE_URL.$resource;

        // CURL
        $curl = curl_init();

        // Configuração
        curl_setopt_array($curl, [
            CURLOPT_URL => $endpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET'
        ]);

        // RESPONSE
        $response = curl_exec($curl);
        
        // Fecha conexão
        curl_close($curl);

        return json_decode($response);
    }

}

?>