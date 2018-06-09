<?php

namespace Inelco\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Inelco\Http\Requests;
use Inelco\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Inelco\Modelos\Kit;
use Inelco\Modelos\Productos;
use Inelco\Modelos\KitArticulos;

class KitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function precioProdKit($id){
        $precio=Productos::select('precio_prod')
            ->where('id',$id)
            ->first();

        return response()->json($precio);
    }

    public function index()
    {
        $kit=Kit::paginate(5);
        return view('admin.kit.index',['kits' =>$kit]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $prods=Productos::pluck('nombre_prod','id')->prepend('Seleccione el producto','0');
        return view('admin.kit.create')->with('prods',$prods);
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
            'nombre_kit'=> 'required|max:255',
            'descripcion_kit' => 'required|max:65535',
            'precio'=>'required|numeric'
        ]);

        $kit= new Kit;
        $kit->nombre_kit=$request->nombre_kit;
        $kit->descripcion_kit=$request->descripcion_kit;
        $kit->precio=$request->precio;

        $productos= Input::get('producto');
        $kit_productos = array();

        foreach ($productos as $producto) {
            $kit_productos[]=new KitArticulos(array(
                'id_producto' => $producto['id_producto'],
                'cantidad' => $producto['cantidad'],
            ));
        }

        $kit->save();
        $kit->articulos()->saveMany($kit_productos);
        return redirect('admin/kit')->with('mensaje','Se ha agregado el kit: '.$request->nombre_kit.', de manera exitosa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $infokit=Kit::with('articulos')->where('id',$id)->first();
        return response()->json($infokit);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $prods=Productos::pluck('nombre_prod','id')->prepend('Seleccione el producto','0');
        $kit=Kit::FindOrFail($id);
        $kitarts=KitArticulos::where('kit_id',$id)->get();
        return view('admin.kit.editar', compact('kit','prods','kitarts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kit $kit)
    {
        $this->validate($request, [
            'nombre_kit'=> 'required|max:255',
            'descripcion_kit' => 'required|max:65535',
            'precio'=>'required|numeric'
        ]);

        $actualizacion= Input::get('actualizar');
        if ($actualizacion) {
            foreach ($actualizacion as $actualiza) {
                KitArticulos::where('id','=',$actualiza['id'])->update([
                        'id_producto'=>$actualiza['id_producto'],
                        'cantidad'=>$actualiza['cantidad']
                    ]);
            }
        }
                     

        $productos= Input::get('producto');
        $cuantos=count($productos);
        $kit_productos = array();

        if ($cuantos>0) {
            $kit_productos = array();
            foreach ($productos as $producto) {
                $kit_productos[]=new KitArticulos(array(
                    'id_producto' => $producto['id_producto'],
                    'cantidad' => $producto['cantidad'],
                ));
            }
         }
          
        $kit->update($request->all());
        $kit->articulos()->saveMany($kit_productos);
        return redirect('admin/kit')->with('mensaje', 'Se ha actualizado el kit: '.$kit->nombre_kit.', de manera exitosa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kit $kit)
    {
        $kit->delete();
        return redirect('admin/kit')->with('mensaje', 'Se ha eliminado el kit: '.$kit->nombre_kit.', de manera exitosa');
    }
}
