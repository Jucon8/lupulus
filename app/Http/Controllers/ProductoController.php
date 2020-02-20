<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facaudes\Storage;

use App\Producto;
use App\Subcategoria;

class ProductoController extends Controller
{
    public function listado (){
      $productos = Producto::simplePaginate(5);
      return view('shop', compact('productos'));
    }

    public function detalle($id){
      $subcategorias = Subcategoria::All();
      $producto = Producto::find($id);
      return view('detalleProducto', ['producto' => $producto, 'subcategorias' => $subcategorias]);
    }

    public function listado_admin (){
      
      $productos = Producto::simplePaginate(15);
      return view('admin-productos', compact('productos'));
    }

    public function agregar(Request $req) {
      $productoNuevo = new Producto();
      $productoNuevo->nombre = $req["nombre"];
      $productoNuevo->precio= $req["precio"];
      $productoNuevo->descripcion= $req["descripcion"];
      $productoNuevo->estado= $req["estado"];
      $productoNuevo->subcategoria_id= $req["subcategoria_id"];
      $productoNuevo->stock= $req["stock"];

       // en $ruta se va a guardar la ruta completa a donde va a ir la imagen
      $ruta = $req->file('imagen_producto')->store('public/productos');
      // Para obtener solamente el nombre, usamos la funcion de PHP basename()
      $nombreArchivo = basename($ruta);
      $productoNuevo->imagen_producto = $nombreArchivo;
      $productoNuevo->save();

      return redirect('admin/productos');
    }

    public function borrar(Request $req) {
      $producto = Producto::find($req->id);
      $producto->borrado = 1;


      $producto->save();
      return redirect('admin/productos');
    }

    public function show($id)
    {
        $producto = Producto::find($id);        
        return view('admin-productos-edit')->with('producto', $producto);
    }   

    public function edit(Request $req, $id)
    {
        $producto = Producto::find($id);
        $producto->nombre = $req["nombre"];
        $producto->precio= $req["precio"];
        $producto->descripcion= $req["descripcion"];
        $producto->estado= $req["estado"];
        $producto->subcategoria_id= $req["subcategoria_id"];
        $producto->stock= $req["stock"];

        
        // en $ruta se va a guardar la ruta completa a donde va a ir la imagen
        $ruta = $req->file('imagen_producto')->store('public/productos');
        // Para obtener solamente el nombre, usamos la funcion de PHP basename()
        $nombreArchivo = basename($ruta);
        $producto->imagen_producto = $nombreArchivo;

        $producto->save();
        return redirect('admin/productos')->with('producto', $producto);
    }   

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








