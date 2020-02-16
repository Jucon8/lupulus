<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Ciudad;
use App\Provincia;
use App\TipoCons;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      $provincia = Provincia::all();
      $ciudad_id = Ciudad::all();
      $tipoCons = TipoCons::all();
      
      $user = Auth::user();
      return view('micuenta', ['user' => $user, 'provincia' => $provincia, 'ciudad_id' => $ciudad_id, 'tipoCons' => $tipoCons]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
      $user = user::find($id);
      $user = Auth::user();      
      return view('micuenta', ['user'=>$user]);
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {        
        $provincia = Provincia::all();
        $ciudad_id = Ciudad::all();
        $tipoCons = TipoCons::all();
        
        $user = Auth::user();        
        $user->name = $request->name;
        $user->apellido = $request->apellido;
        $user->direccion = $request->direccion;
        $user->ciudad_id = $request->ciudad_id;
        $user->provincia_id = $request->provincia_id;
        $user->telefono = $request->telefono;
        $user->tipoCons_id = $request->tipoCons_id;
        $user->save();
        return view('micuenta', ['user' => $user, 'provincia' => $provincia, 'ciudad_id' => $ciudad_id, 'tipoCons' => $tipoCons]);               
        //return view('micuenta', ['user' => $user, 'provincia' => $provincia, 'tipoCons' => $tipoCons]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // agregado ahora

      public function update_avatar(Request $request) {
        $this->validate($request, [
          'avatar' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
     
        $filename = Auth::id().'_'.time().'.'.$request->avatar->getClientOriginalExtension();
        $request->avatar->move(public_path('img/avatars'), $filename);
     
        $user = Auth::user();
        $user->avatar = $filename;
        $user->save();
     
        return redirect('micuenta');
      }

}
