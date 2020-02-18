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

      $ruta = $req->file("imagen_producto")->store("public");
      $nombre_archivo_imagen = basename($ruta);

      $productoNuevo->imagen_producto = $nombre_archivo_imagen;

      $productoNuevo->nombre = $req["nombre"];
      $productoNuevo->precio= $req["precio"];
      $productoNuevo->descripcion= $req["descripcion"];
      $productoNuevo->estado= $req["estado"];
      $productoNuevo->subcategoria_id= $req["subcategoria_id"];
      $productoNuevo->stock= $req["stock"];
      

      $productoNuevo->save();

      return redirect("admin");

}


function borrar(Request $req) {
  $producto = Producto::find($req->id);
  $producto->borrado = 1;


  $producto->save();
  return redirect("admin");
}

// public function update_avatar(Request $request) {
//         $this->validate($request, [
//           'imagen_producto' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
//         ]);
//
//         $filename = Auth::id().'_'.time().'.'.$request->imagen_producto->getClientOriginalExtension();
//         $request->imagen_producto->move(public_path('store/avatars'), $filename);
//
//         $user = Auth::user();
//         $user->avatar = $filename;
//         $user->save();
//
//         return redirect('micuenta');
//       }




}
