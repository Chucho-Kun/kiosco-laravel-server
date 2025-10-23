<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductoCollection;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $estado = $request->query('disponible', 1);
        return new ProductoCollection(Producto::where('disponible', $estado)->get());

        //return new ProductoCollection(Producto::all());
        //return new ProductoCollection(Producto::orderBy('id', 'DESC')->paginate(10));
        //return new ProductoCollection(Producto::where('disponible', 1)->orderBy('id','DESC')->paginate(10)); // leer si estan disponible despues del borrado logico
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        dd($producto->all());
        //return response()->json(['mensaje' => 'se debe poder prra']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        $switch = ( $producto->disponible === 0 ) ? 1 : 0 ;

        $producto->disponible = $switch;
        $producto->save();
        return [
            'producto' => $producto
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
