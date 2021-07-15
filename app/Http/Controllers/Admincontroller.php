<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Helpers\GeneralHelper;


class Admincontroller extends Controller
{
    public function  index(){
       // $users = DB::table('users')->paginate(10);
        $users = User::paginate(3);
        var_dump(count($users));
        $ages = [];
        $locations = [];
        //Se guardan las edades y las locaciones de cada usuario en un array usando las funciones definidas en el helper
        for($i=0;$i<count($users);$i++){
            $ages[$i] = GeneralHelper::calculaedad($users[$i]->dateOfBirth);
            $locations[$i] = GeneralHelper::getLocation($users[$i]->city_id);
        }
        

        return view('/admin/userList',compact(
            'users',
            'ages',
            'locations'
        ));
    }
}
