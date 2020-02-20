<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Provincia;
use App\Producto;
use App\Ciudad;
use App\User;
use App\TipoCons;


class CarritoController extends Controller
{

    // public function __construct(Request $request)
    // {
    //     if (session()->put('carrito', array()));
    // }

    // public function total(){
    //     $carrito = \Session::get('carrito');
    //     $total = 0;
    //     foreach ($carrito as $item) {
    //         $total += $item->precio + $item->cantidad;
    //     }
    //     return $total;
    // }
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index($id)
    // {
    //     if ($productos = Producto::find($id)) {
    //         session()->put('carrito', array());
    //     }
      
    //   $user = Auth::user();
      
    //   return view('carrito', ['user' => $user, 'productos' => $productos]);
    // }

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
        //
    }
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
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
       return view('carrito-show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $productos = Producto::find($id);
        $value = $request->session()->get('key');
        return view('carrito', ['productos' => $productos]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 

}
