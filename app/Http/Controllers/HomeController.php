<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

  
    public function index()
    {
        return view('inicio');
    }

    public function rolesPermissions(){
        $nameUser = auth()->user()->name;
        echo("<h1>{$nameUser}</h1>");

        foreach ( auth()->user()->roles as $role){
            echo "<b> $role->name </b>-> ";

            $permissions = $role->permissions;
            foreach($permissions as $permission){
                echo " $permission->name ,";
            }
            echo "<hr>";
        }
    }
}
