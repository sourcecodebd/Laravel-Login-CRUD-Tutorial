<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psy\Command\DumpCommand;
use App\User;
use Validator;
use App\Http\Requests\UserRequest;

class HomeController extends Controller
{
    public function index(Request $req){

        return view('home.index');

    }

    public function show($id){

        $user = User::find($id);
        return view('home.details')->with('user', $user);

    }

    public function create(){

        return view('home.create');
        
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
        
        return redirect()->route('home.userlist');
    }
        
}

    public function edit($id){
      
        $user = User::find($id);
        return view('home.edit')->with('user', $user);
    }


    public function update($id, Request $req){

        //updating DB or model

        $user = User::find($id);

        $user->username = $req->username;
        $user->password = $req->password;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->dept = $req->dept;
        $user->cgpa = $req->cgpa;
        $user->type = $req->type;

        $user-> save();

        return redirect()->route('home.userlist');
    }

    public function userlist(){
        // db model userlist

        $userlist = User::all();
        return view('home.list')->with('list', $userlist);
    }

    public function delete($id){

        $user = User::find($id);
        return view('home.delete')->with('user', $user);
    }

    public function destroy($id){

        if(User::destroy($id)){
            return redirect()->route('home.userlist');
        }else{
            return redirect('/home/delete/'.$id);
        }
    }
}
