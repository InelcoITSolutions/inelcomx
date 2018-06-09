<?php

namespace Inelco\Http\Controllers;

use Illuminate\Http\Request;

use Inelco\Http\Requests;
use Inelco\Http\Controllers\Controller;
use Inelco\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        $user=User::findOrFail($id);
        $this->validate($request, [
            'name'=> 'max:255',
            'razon_social' => 'required|max:255',
            'nombre_comercial'=>'required|max:255',
            'rfc' => 'max:255',
            'contribuyente' => 'max:255',
            'correo_facturacion' => 'required|max:255',
            'telefono' => 'required|max:255',
            'calle' => 'max:255',
            'no_exterior' => 'max:255',
            'no_interior' => 'max:255',
            'colonia' => 'max:255',
            'cp' => 'max:255',
            'pais' => 'max:255',
            'estado' => 'max:255'
        ]);

        $user->update($request->all());
        return redirect('home')->with('mensaje', 'Se ha actualizado su perfil');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
