<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Helpers\GeneralHelper;
use App\Models\Country;
use App\Models\City;


class Admincontroller extends Controller
{
    public function  index()
    {

        $users = User::paginate(6);
        $ages = [];
        $locations = [];
        //Se guardan las edades y las locaciones de cada usuario en un array usando las funciones definidas en el helper
        for ($i = 0; $i < count($users); $i++) {
            $ages[$i] = GeneralHelper::calculaedad($users[$i]->dateOfBirth);
            $locations[$i] = GeneralHelper::getLocation($users[$i]->city_id);
        }

        return view('/admin/userList', compact(
            'users',
            'ages',
            'locations'
        ));
    }

    public function create()
    {

        //Se calcula la fecha actual para mostrar en restringir en el formulario que sea menor de edad
        $anio = date("Y") - 18;
        $fecha = date("m-d");

        $paises = Country::all('name','id');
        $ciudades = City::All('id','name');
       

        return View('/admin/createUser', compact(
            'anio',
            'fecha',
            'paises',
            'ciudades'
        ));
    }
    public function store(Request $req)
    {

        
        User::create([
            'name' => $req['inputName'],
            'email' => $req['inputEmail'],
            'password' => bcrypt($req['inputPassword']),
            'phone' => $req['inputCel'],
            'dni' => $req['inputCc'],
            'dateOfBirth' => $req['dateBirth'],
            'rol_id' => 2,
            'city_id' => $req['inputCity']
            
        ]);

        return redirect('/admin/createUser');
    }
    public function getCities(Request $request, $id){
        if($request->ajax()){
            $ciudades = City::loadCities($id);
            return response()->json($ciudades); 
        }
    }
    public function edit($id){
        
        $user = User::find($id);
        
        return view('/admin/editUser', compact(
            'user'
        ));
    }
}
