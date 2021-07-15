<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Helpers\GeneralHelper;



class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   
        
        $user = DB::table('users')->where('id', Auth::user()->id)->first();
        $location = GeneralHelper::getLocation($user->city_id);
        
        return view('home', compact(
            'user',
            'location'
        ));
    }
}
