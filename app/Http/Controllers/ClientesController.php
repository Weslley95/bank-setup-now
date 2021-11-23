<?php

namespace App\Http\Controllers;

use App\Clientes;
use App\Conta;
use App\User;

use Illuminate\Http\Request;
use App\Http\Requests\FormsRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

/**
 * Description of DadosController
 *
 * @author weslley
 */
class ClientesController extends Controller
{

    /**
     * Método para atribuir dados a página onde lista todos os clientes
     * 
     * @param Request $request
     * @return string
     */
    protected function index(Request $request)
    {
        // Get data BD
        $clientes = User::query()->orderBy('id')->get();

        // Set mensagem for user
        $mensagem = $request->session()->get('mensagem');

        return view('clientes.index', compact('clientes', 'mensagem'));
    }

    protected function perfil($clienteId)
    {           
        $clientes = User::where('id', $clienteId)->get();
        $contas = Conta::where('user_id', $clienteId)->get();
        
        return view('clientes.perfil', compact('clientes', 'contas'));
    }

    /**
     * Método para obter dados da tabela 'Conta' do usuário
     * 
     * @param string $id
     * @param int $id
     * @return float or string
     */
    static public function dadosConta($option, $id)
    {

        if (!empty($option && $id)) {
            if ($option === "nome_chave_bsn") {
                echo  Conta::where('id', $id)->value('nome_chave_bsn');
            } else if ($option === "saldo_bsn") {
                $dado = 'B$N ';
                $dado .= Conta::where('id', $id)->value('saldo_bsn');
                echo $dado;
            }
        }
    }

    /**
     * Página para crear cliente
     * 
     * @return string
     */
    protected function pageCreateClient()
    {
        return view('clientes.create');
    }

    /**
     * Método criar uma conta para o cliente 
     * 
     * @param Request $request
     * @return string
     */
    protected function createClient(FormsRequest $request)
    {
        // Recebe os dados do post(adicionar)
        $nome = $request->nome;
        $email = $request->email;
        $senha = Hash::make($request->senha);
        $profile = 'Cliente';

        // Adiciona todos os parametros do método post
        $cliente = User::create([
            'nome' => $nome,
            'email' => $email,
            'password' => $senha,
            'profile' => $profile
        ]);

        $nomeChaveBsn = "$request->nome_chave_bsn.b\$n";
        $saldoBsn = $request->saldo_bsn;

        if (!empty($cliente)) {
            $cliente->conta()->create([
                'saldo_bsn' => $saldoBsn,
                'nome_chave_bsn' => $nomeChaveBsn
            ]);
        }

        return redirect('/dash');
    }

    /**
     * Método para recuperar dados da conta e cadastro do usuário
     * 
     * @param int $clienteId
     * @return object
     */
    protected function pageUpdate($clienteId){
        
        $contas = Conta::where('user_id', $clienteId)->get();
        $clientes = User::where('id', $clienteId)->get();
        
        return view('clientes.update', compact('contas', 'clientes'));
    }
    
    /**
     * Método para recuperar os dados do formulário 'Cadastro de usuários' e atualizar 
     * 
     * @param Object $request
     * @return string
     */
    protected function updateUser(FormsRequest $request)
    {
        // Recebe os dados do post
        $id = $request->id;
        $nome = $request->nome;
        $email = $request->email;
        $senha = $request->senha;
        $nomeChaveBsn = "$request->nome_chave_bsn.b\$n";
        $saldoBsn = $request->saldo_bsn;
        
        // Atribui dados na tabela clientes
        $cliente = User::where('id', $id)->update([
            'nome' => $nome,
            'email' => $email,
            'password' => $senha
        ]);
      
        // Atribui dados a tabela conta
        if(!empty($cliente)){
            Conta::where('user_id', $id)->update([
                'saldo_bsn' => $saldoBsn,
                'nome_chave_bsn' => $nomeChaveBsn

            ]);
        }
        
        // Mensagem após salvar dados
        $request->session()->flash('mensagem', "Usuário $nome atualizado com sucesso!");
        
        return redirect('/dash');
    }
    
    /**
     * Método para apagar conta
     * 
     * @param Request $request
     * @return type
     */
    protected function delete(Request $request)
    {
        Conta::destroy($request->id);
        User::destroy($request->id);

        // Set mensagem in session user
        $request->session()->flash('mensagem', "Excluido com sucesso!");

        return redirect('/dash');
    }
}
