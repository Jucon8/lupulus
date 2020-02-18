<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Subcategoria;
use Illuminate\Http\Request;

class ProductosAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::All();
      return view('admin-productos', compact('productos'));
      //FALTA HACER PAGINACION
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-productos-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req) {
      $productoNuevo = new Producto();
      
      $ruta = $req->file("imagen_producto")->store("public");
      $nombre_archivo_imagen = basename($ruta);
      $productoNuevo->imagen_producto = $nombre_archivo_imagen;

      $productoNuevo->nombre = $req["nombre"];
      $productoNuevo->precio= $req["precio"];
      $productoNuevo->descripcion= $req["descripcion"];
      $productoNuevo->estado= $req["estado"];
      $productoNuevo->subcategoria_id= $req["subcategoria_id"];
      $productoNuevo->stock= $req["stock"];
      $productoNuevo->imagen_producto= $req["imagen_producto"];


      $productoNuevo->save();

      return redirect("admin-productos");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
