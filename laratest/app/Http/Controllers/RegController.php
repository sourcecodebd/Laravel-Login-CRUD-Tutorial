<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psy\Command\DumpCommand;
use App\User;
use Validator;
use App\Http\Requests\UserRequest;

class RegController extends Controller
{
    public function index(){

        return view('registration.index');
        
    }

    // All 3 ways of Validation-> public function store(Request $req){
    public function store(UserRequest $req){ // This Validation used by Requests folder
    
    /* 1.
            $this->validate($req, [
                'username' => 'required|max:6',
                'password' => 'required|min:6'
            ])->validate();
    */
    

    /* 2. ------------------------------------------
            $req->validate([
                'username' => 'required|max:6',
                'password' => 'required|min:6'])->validate();
    
            $validation->validate();
    */
    
    /* 3.   $validation = Validator::make($req->all(), [
                'username' => 'required|max:6',
                'password' => 'required|min:6'
            ]);

            if($validation->fails()){
                return redirect()->route('home.create')->with('errors', $validation->errors());
                return Back()->with('errors', $validation->errors())->withInput();            
            }
    */
        
        //insert into DB or model...

        if($req->hasFile('myfile')){
            $file = $req->file('myfile');  
            /*echo $file->getClientOriginalName()."<br>";  
            echo $file->getClientOriginalExtension()."<br>";  
            echo $file->getSize()."<br>";*/
            //$file->move('upload', $file->getClientOriginalName());

            $filename = time().".".$file->getClientOriginalExtension();

            $file->move('upload', $filename);

        $user = new User();
        $user->username = $req->username;
        $user->password = $req->password;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->dept = $req->dept;
        $user->cgpa = $req->cgpa;
        $user->type = $req->type;
        $user->profile_img = $filename;

        $user-> save();
        
        $req->session()->flash('msg', 'Registration is successful! Please login...');
        return redirect()->route('login.index');
    }
        
}

}
