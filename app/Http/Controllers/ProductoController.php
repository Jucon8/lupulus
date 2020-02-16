<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Producto;

class ProductoController extends Controller
{
    public function listado (){
      $productos = Producto::All();
      return view('shop', compact('productos'));
    }

    public function detalle($id){
      $producto = Producto::find($id);
      return view('detalleProducto', compact('producto'));
    }

    public function listado_admin (){
      $productos = Producto::All();
      return view('admin', compact('productos'));
    }

    public function agregar(Request $req) {
      $productoNuevo = new Producto();

      $productoNuevo->nombre = $req["nombre"];
      $productoNuevo->precio= $req["precio"];
      $productoNuevo->descripcion= $req["descripcion"];
      $productoNuevo->estado= $req["estado"];
      $productoNuevo->subcategoria_id= $req["subcategoria_id"];
      $productoNuevo->stock= $req["stock"];
      $productoNuevo->imagen_producto= $req["imagen_producto"];


      $productoNuevo->save();

      return redirect("admin");

    }

    public function borrar(Request $req) {
      $producto = Producto::find($req->id);
      $producto->borrado = 1;


      $producto->save();
      return redirect("admin");
    }

    public function detalleEditar($id){
      $producto = Producto::find($id);
      return view('editarProducto', compact('producto'));
    }

    public function editar(Request $req) {

      $producto = Producto::find($req->id);

      $producto->nombre = $req["nombre"];
      $producto->precio= $req["precio"];
      $producto->descripcion= $req["descripcion"];
      $producto->estado= $req["estado"];
      $producto->subcategoria_id= $req["subcategoria_id"];
      $producto->stock= $req["stock"];

      $producto->save();
      return redirect("admin");
    }







}
