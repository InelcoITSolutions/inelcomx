<?php

namespace Inelco\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Inelco\Http\Requests;
use Inelco\Http\Controllers\Controller;
use Inelco\Modelos\CategoriaEventos;

class CategoryEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias=CategoriaEventos::paginate(5);
        return view('admin.calendario.categorias.index',[
            'categorias' =>$categorias
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'evento_categoria' => 'required|max:255'
        ]);

        CategoriaEventos::create($request->all());
        return redirect('admin/categorias_eventos')->with('mensaje','Se ha agregado la categoría de manera exitosa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria=CategoriaEventos::FindOrFail($id);
        return view('admin.calendario.categorias.editar', compact('categoria'));
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
        $this->validate($request, [
            'evento_categoria' => 'required|max:255'
        ]);

        $categoriaUpdate=CategoriaEventos::FindOrFail($id);
        $entrada=$request->all();
        $categoriaUpdate->fill($entrada)->save();
        return redirect('admin/categorias_eventos')->with('mensaje', 'Se ha actulizado la categoría de manera exitosa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoriaDel=CategoriaEventos::FindOrFail($id);
        $categoriaDel->delete();
        return redirect('admin/categorias_eventos')->with('mensaje', 'Se ha eliminado la categoría de manera exitosa');
    }
}
