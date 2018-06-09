<?php

namespace Inelco\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Inelco\Http\Requests;
use Inelco\Http\Controllers\Controller;

use Inelco\Modelos\link_descarga;

class LinkDownloadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links=link_descarga::paginate(10);

        return view('admin.link_descargas.index',['links' =>$links]);
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
        $this->validate($request, [
            'nombre_software'=> 'required|max:255',
            'link_software' => 'required|max:255',
        ]);

        link_descarga::create($request->all());
        return redirect('admin/link-descargas')->with('mensaje','Se ha agregado el link de descarga de: '.$request->nombre_software);
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
    public function edit(link_descarga $link_descarga)
    {
        return view('admin.link_descargas.editar', array('link_descarga'=>$link_descarga));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, link_descarga $link_descarga)
    {
        $this->validate($request, [
            'nombre_software'=> 'required|max:255',
            'link_software' => 'required|max:255',
        ]);

        $link_descarga->update($request->all());
        return redirect('admin/link-descargas')->with('mensaje', 'Se ha actualizado la información de '.$request->nombre_software);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(link_descarga $link_descarga)
    {
        $link_descarga->delete();
        return redirect('admin/link-descargas')->with('mensaje', 'Se ha elmininado el link de '.$link_descarga->nombre_software);
    }
}
