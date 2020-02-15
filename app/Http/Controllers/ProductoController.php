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
    // public function  borrar(Request $req) {
    //   $productoNuevo = new Producto();
    //
    //   $productoNuevo->id = $req["id"];
    //
    //   $producto->save();
    //
    //   return redirect("admin");
    // }

  /*  public function borrar($id){
      $producto = Producto::find($id);
      $id = 1;
      return view('detalleProducto', compact('producto'));
    }*/

//     function borrar($id) {
//       $producto = Producto::find($req->id);
//       $producto->borrado = 1;
//
//       $producto->save();
// }

function borrar(Request $req) {
  $producto = Producto::find($req->id);
  $producto->borrado = 1;


  $producto->save();
  return redirect("admin");
}







}
