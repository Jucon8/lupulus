<?php

namespace App\Http\Controllers;

use App\User;
use App\Producto;
use Illuminate\Http\Request;
use App\Http\Requests\UserAdminRequest;

class UsersAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= User::orderBy('id', 'ASC')->paginate(10);
        return view('admin-users')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-users-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserAdminRequest $request)
    {
        $user= new User($request->all());
        $user->password = bcrypt($request->password);
        $user->save();
        flash('Se ha registrado a <strong>' . $user->username . '</strong> con éxito!')->success();
        return redirect('/admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::find($id);

        return view('admin-users-edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user=User::find($id);
        $user->username = $request->username;
        $user->email= $request->email;
        $user->rol_id= $request->rol_id;
        $user->save();
        flash('Se ha editado a <strong>' . $user->username . '</strong> con éxito!')->warning();
        return redirect('admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $id)
    {   $id->delete();
        flash('Se ha eliminado a <strong>' . $id->username . '</strong> con éxito!')->error();
        return redirect('admin/users');
    }

    
}
