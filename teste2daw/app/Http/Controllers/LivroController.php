<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $livros = livro::paginate(2);
        if($request->ajax()){
            return response()->json(view('livro.livro',compact('livro'))->render());
        }
        return view('livro.index',compact('livro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view ('livro.createlivro') ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


         \App\livro::create([
            'titulo' => $request['titulo'],
            'resumo' => $request['resumo'],
            'autor' => $request['autor'],
            'edicao' => $request['edicao'],
            'editora' => $request['editora'],
            'volume' => $request['volume'],
            'categoria' => $request['categoria'],
            'estado_conservacao' => $request['estado_conservacao'],


            ]);

        return "Livro Registado com Sucesso";

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $livro = \App\livro::find($id);
        //return($cliente);
       // return view('requisicao.listarreq', compact('cliente'));
        return view('requisicao.editar', ['livro' => $livro]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('livro.edit',['livro'=>$this->livro]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->livro->fill($request->all());
        $this->livro->save();

        Session::flash('message','Livro Editado Correctamente');
        return Redirect::to('/livro');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $this->livro->delete();
        Session::flash('message','Livro Eliminado Correctamente');
        return Redirect::to('/livro');

    }
}
