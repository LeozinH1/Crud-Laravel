<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\UsuariosRequest;
use App\Models\Usuarios;

class UsuarioController extends Controller
{

    private $usuario;

    public function __construct(){
        $this->usuario = new Usuarios();    
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = $this->usuario->all();
        return view('home', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuariosRequest $request)
    {
        $usuario = $this->usuario->create([
            'nome' => $request->nome,
            'cidade' => $request->cidade,
            'telefone' => $request->telefone
        ]);

        if($usuario){
            return redirect("usuarios/$usuario->id")->with('success','Usuário cadastrado com sucesso.');
        }else{
            return redirect("usuarios")->with('error','Erro ao cadastrar o usuário.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = $this->usuario->find($id);
        return view('visualizar', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = $this->usuario->find($id);
        return view('cadastrar', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsuariosRequest $request, $id)
    {
        $this->usuario->where(['id' => $id])->update([
            'nome' => $request->nome,
            'cidade' => $request->cidade,
            'telefone' => $request->telefone
        ]);

        return redirect('usuarios/' . $id)->with('success','Usuario editado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->usuario->destroy($id);
        return redirect('usuarios')->with('success','Usuario apagado com sucesso.');
    }
}
