<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class CarritoController extends Controller

{
//      /* public function __construct(Request $request)
//     {
//        if(!$request->session()->has('carrito')){
//             $request->session()->put('carrito', array());

//        }

//     }
//      public function index(Request $request)
//     {
//        $cart =$request->session()->get('carrito');
//        $total =$this->total($request);
//        return view('carrito', compact('cart','total'));
//     }

//  */
       public function add($id)
    {
        session_start();
        $_SESSION['carrito'][] = $id;
        $productos = Producto::whereIn('id', $_SESSION['carrito'])->get();
        return view('carrito', compact('productos'));
    }
   public function total(Request $request){

        $cart = $request->session()->get('carrito');
        $total =0;
        foreach($cart as $item) {
            $total = $total +$item->precio;
            $resultado=$total * $item->cantidad;
        }
        return $resultado;
    }
        public function destroy(Request $request, $id)
    {
        $cart = $request->session()->forget($id);
    //     session_destroy();
    //    $productos = Producto::whereIn('id', $_SESSION['carrito'])->get();
    //            dd($_SESSION['carrito']);

     return view('carrito');
    }
 

}
