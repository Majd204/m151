<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\URL;
use  Illuminate\Support\Facades\DB;

class UserController extends Controller{
   

public function store (request $request)
{

    $email=$request->input('email');
    $password=$request->input('password');
    $first_name=$request->input('first_name');
    $last_name=$request->input('last_name');
    $zip=$request->input('zip');
    $city=$request->input('city');
    $street=$request->input('street');
    $number=$request->input('number');
    echo DB::insert('insert into users(id,email,password,first_name,last_name,zip,street,city,number) values (?,?,?,?,?,?,?,?,?)',[null,$email,$password,$first_name,$last_name, $zip,$city, $street, $number]);
}
public function logs (request $request){

    $email=$request->input('email');
    $password=$request->input('password');
    $data=DB::select('select id from users where email=? and password=?' ,[$email,$password]);
    if (count($data))
    {
        echo"gooooddddddd";
    }
    else
    {
        echo "baaaad";
    }
}






}
