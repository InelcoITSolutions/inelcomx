<?php

namespace Inelco\Http\Controllers;

use Inelco\Modelos\Productos;
use Illuminate\Support\Facades\Input;

class TiendaController extends Controller
{
   /* public function index()
    {
        $productos  = Productos::find([1, 2, 3]);
        $productos2 = Productos::find([4, 5, 6]);
        $productos3 = Productos::find([7, 8]);
        //dd($productos);
        $carrito = \Session::get('carrito');

        return view('tienda.index', compact('carrito', 'productos', 'productos2', 'productos3'));

    }*/
    public function show($etiqueta)
    {
        $query = Input::get('search');

        // Returns an array of products that have the query string located somewhere within
        // our products product name. Paginate them so we can break up lots of search results.
        $search = Productos::where('nombre', 'LIKE', '%' . $query . '%')->paginate(200);
        // Return a view and pass the view the list of products and the original query.

        $producto = Productos::where('etiqueta', $etiqueta)->first();

        $productodos = Productos::where('etiqueta', $etiqueta)->where('nombre', 'LIKE', '%' . $query . '%')->first();
        //dd($producto);

        return view('templates.tienda.ver-mas', compact('search', 'producto', 'productodos'));

    }
}
