<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Request;

class SitesController extends Controller
{

    public function show()
    {
        if (Auth::user()->rol_id==1) {
            return view('admin');
        } else {
            return redirect('home');
        }
        
    } 
}
