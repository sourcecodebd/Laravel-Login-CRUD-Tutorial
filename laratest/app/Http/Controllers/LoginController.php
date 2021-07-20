<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(){

        return view('login.index');
    }

    public function verify(Request $req){

        /* $user = User::where('password', $req->password) //Select Query using existing database
        ->where('username', $req->username)
        ->get();
        */
        
        $user = DB::table('Users')
        ->where('password', $req->password) //Select Query using DB database
        ->where('username', $req->username)
        ->get();

        if($req->username == "" || $req->password == ""){
           $req->session()->flash('msg', 'Null username or password...');
           return redirect()->route('login.index');
        }

        elseif($req->username == "Nafi" && $req->password == "99"){

            $req->session()->put('username', $req->username);
            $req->session()->put('type', 'Admin');
            return redirect()->route('home.index');
        }

        elseif($req->username !='' && $req->password != '' && count($user)>0){
            //$req->session()->put('password', $req->password);
            //$req->session()->get('name');
            //$req->session()->forget('name');
            //$req->session()->flush();
            //$req->session()->has('name');

            /* $req->session()->flash('msg', 'Invalid user info...');
            $req->session()->flash('error', 'Bad request error...');
            $req->session()->get('msg');
            $req->session()->keep('msg');
            $req->session()->get('msg'); */
            //$req->session()->reflash();
            //$req->session()->pull('name');

            $req->session()->put('username', $req->username);
            $req->session()->put('type','User');
            
            return redirect()->route('home.index');
        }
        
        else{

            $req->session()->flash('msg', 'Invalid username or password...');
            return redirect()->route('login.index');
        }
    }
}
