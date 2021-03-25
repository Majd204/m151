<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\URL;
use  Illuminate\Support\Facades\DB;

class UserController extends Controller{
   
    public function login() {
        

        return view('login');
    }

    public function register(){

        return view('register');
    }

public function store (request $request)
{

    $email=$request->input('email');
    $password=$request->input('password');
    $first_name=$request->input('firstname');
    $last_name=$request->input('lastname');
    $zip=$request->input('zip');
    $street=$request->input('street');
    $number=$request->input('number');
    echo DB::insert('insert into user(id,email,password,first_name,last_name,zip, street,number) values (?,?,?,?,?,?,?,?)',[null,$email,$password,$first_name,$last_name, $zip, $street, $number]);
}
public function logs (request $request){

    $email=$request->input('name');
    $password=$request->input('password');
    $data=DB::select('select id from user where name=? and password=?' ,[$email,$password]);
    echo count($data);
}






}
