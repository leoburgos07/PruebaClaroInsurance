<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Helpers\GeneralHelper;
use App\Models\Email;
use Carbon\Carbon;



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
    public function listMails($id)
    {

        $mails = DB::table('emails')->where('user_id', $id)->get();
        
        return view('/listMails', compact([
            'mails',
        ]));
    }
    public function createMail()
    {

        return view('createEmail');
    }
    public function sendMail(Request $req)
    {


        Email::create([
            'destination' => $req['dest'],
            'subject' => $req['subject'],
            'message' => $req['body'],
            'state' => 'Enviado',
            'user_id' => $req['from']
        ]);


        return redirect('/listEmails/'.$req['from']);
    }
    public function showMail($id){
        $mail = Email::find($id);
        
        
        return view('showMail',compact([
            'mail'
        ]));
    }
}
