<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {

        $clients=Client::get();

        return view('clients.index',[
            'clients' => $clients
        ]
        );
    }
    public function show(int $id)
    {
        $client=Client::find($id);
        //metodo find recebe o id que é recebido no controller
        return view('clients.show',[
            'client'=> $client
        ]);
    }

    public function create()
    {
        return view('clients.create');
    }
    //DISPONIBILIZA O FORMULÁRIO PARA PREENCHER
    public function store(Request $request){
        $dados = $request->except('_token');
        Client::create($dados) ;

        return redirect('/clients');
    }
    //AQUI ENVIA OS DADOS E ADICIONA ELES NO BANCO DE DADOS O FOREACH MOSTRA TODAS AS PARTES DOS CLIENTES

    public function edit(int $id)
    {
        $client=Client::find($id);

        return view('clients.edit',[
            'client'=> $client
        ]);
    }
    //PEGA O ID ECOLOCA OS DADOS NO FORMULARIOS PARA QUE OCORRA A ALTERAÇÃO
    public function update(int $id,Request $request)
    {
        $client = Client::find($id);

        $client->update([
            'name'=>$request->name,
            'endereco'=>$request->endereco,
            'observacao'=>$request->observacao
        ]);
        return redirect('/clients');
    }
    //PEGA O ID DISPONIBILIZADO NO FORMULARIO PEGA AS INFORMÇÕES E ATUALIZA,BASEANDO-SE NAS INFORMAÇÕES SUBMETIDAS
    public function destroy(int $id){
        $client=Client::find($id);

        $client->delete();

        return redirect('/clients');
    }
}
