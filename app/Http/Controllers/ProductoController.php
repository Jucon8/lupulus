<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Producto;
use App\Subcategoria;

class ProductoController extends Controller
{
    public function listado (){
      $productos = Producto::All();
      return view('shop', compact('productos'));
      //FALTA HACER PAGINACION.
    }

    public function detalle($id){
      $subcategorias = Subcategoria::All();
      $producto = Producto::find($id);
      return view('detalleProducto', ['producto' => $producto, 'subcategorias' => $subcategorias]);
    }


    //MIGRAMOS A PRODUCTOSADMINCONTROLLER @INDEX
    // public function listado_admin (){
    //   $productos = Producto::All();
    //   return view('admin-productos', compact('productos'));
    //   //FALTA HACER PAGINACION
    // }


    //MIGRAMOS A PRODUCTOSADMINCONTROLLER @STORE
    // public function agregar(Request $req) {
    //   $productoNuevo = new Producto();
      
    //   $ruta = $req->file("imagen_producto")->store("public");
    //   $nombre_archivo_imagen = basename($ruta);
    //   $productoNuevo->imagen_producto = $nombre_archivo_imagen;

    //   $productoNuevo->nombre = $req["nombre"];
    //   $productoNuevo->precio= $req["precio"];
    //   $productoNuevo->descripcion= $req["descripcion"];
    //   $productoNuevo->estado= $req["estado"];
    //   $productoNuevo->subcategoria_id= $req["subcategoria_id"];
    //   $productoNuevo->stock= $req["stock"];
    //   $productoNuevo->imagen_producto= $req["imagen_producto"];
    //   $productoNuevo->save();

    //   return redirect("admin-productos");
    // }

    //MIGRAMOS A PRODUCTOSADMINCONTROLLER @DESTROY
    // public function borrar(Request $req) {
    //   $producto = Producto::find($req->id);
    //   $producto->borrado = 1;


    //   $producto->save();
    //   return redirect("admin");
    // }

//MIGRAMOS A PRODUCTOSADMINCONTROLLER @EDIT & @UPDATE    
    //     public function editar(Request $req) {

    //   $producto = Producto::find($req->id);

    //   $producto->nombre = $req["nombre"];
    //   $producto->precio= $req["precio"];
    //   $producto->descripcion= $req["descripcion"];
    //   $producto->estado= $req["estado"];
    //   $producto->subcategoria_id= $req["subcategoria_id"];
    //   $producto->stock= $req["stock"];

    //   $producto->save();
    //   return redirect("admin-productos");
    // }
}








