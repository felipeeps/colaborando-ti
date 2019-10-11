<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function verificarColaborador(){
        if(auth()->user()->roles->count() == 0){
            DB::table('role_user')->insert(
                ['role_id' => 2, 'user_id' => auth()->user()->id]
            );
            return view('inicio');
        }
        else
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
