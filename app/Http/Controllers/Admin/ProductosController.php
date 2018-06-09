<?php

namespace Inelco\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Inelco\Http\Requests;
use Inelco\Http\Controllers\Controller;
use Inelco\Modelos\Productos;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos=Productos::paginate(10);

        return view('admin.productos.index',['productos' =>$productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$category=CategoriaEventos::pluck('evento_categoria','id'); ->with('category',$category)
        return view('admin.productos.create');
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
            'clave'=> 'required|max:11',
            'clave_proveedor' => 'max:255',
            'nombre_prod'=>'required|max:255',
            'descripcion_prod' => 'required',
            'marca' => 'max:255',
            'link_prod' => 'max:255',
            'tipo' => 'required|max:255',
            'precio_prod' => 'required|max:9',
            'logo_prod' => 'max:255',
            'img1_prod' => 'max:255',
            'img2_prod' => 'max:255',
            'img3_prod' => 'max:255',
            'img4_prod' => 'max:255',
            'img5_prod' => 'max:255',
            'flyer_prod' => 'max:255'
        ]);

        Productos::create($request->all());
        return redirect('admin/productos')->with('mensaje','Se ha agregado el producto: '.$request->nombre_prod.', de manera exitosa');
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
        $producto=Productos::FindOrFail($id);
        return view('admin.productos.editar', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productos $producto)
    {
        $this->validate($request, [
            'clave'=> 'required|max:11',
            'clave_proveedor' => 'max:255',
            'nombre_prod'=>'required|max:255',
            'descripcion_prod' => 'required',
            'marca' => 'max:255',
            'link_prod' => 'max:255',
            'tipo' => 'required|max:255',
            'precio_prod' => 'required|max:9',
            'logo_prod' => 'max:255',
            'img1_prod' => 'max:255',
            'img2_prod' => 'max:255',
            'img3_prod' => 'max:255',
            'img4_prod' => 'max:255',
            'img5_prod' => 'max:255',
            'flyer_prod' => 'max:255'
        ]);

        $producto->update($request->all());
        return redirect('admin/productos')->with('mensaje', 'Se ha actualizado el producto: '.$producto->nombre_prod.', de manera exitosa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productos $producto)
    {
        $producto->delete();
        return redirect('admin/productos')->with('mensaje', 'Se ha eliminado el producto: '.$producto->nombre_prod.', de manera exitosa');
    }
}
