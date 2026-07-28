<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    // Passing View From Controller
    function getUser()
    {
        return view('user');
    }

    // Passing Data to View
    function aboutUser($name)
    {
        return "Hello this is  your about page :".$name;
    }

    function getUserName($name)
    {
        return view('getUserName',['name'=>$name]);
    }

    function adminLogin()
    {
        // Check if view exists or not
        if(View::exists('admin.login')){
           return view('admin.login');
        }
        else{
            return "View Not Found";
        }
       
    }

    function abouth()
    {
        return view('abouth');
    }

    function getUserHome()
    {
        $name="Arnab";
        $users=['Arnab','Dutta','Raj'];
        return view('home', ['name' => $name,'users'=>$users]);
    }


    // ============User Form Requset Passing=======//
    function addUser(Request $request)
    {
        // echo "User name is:".$request->name;
        // echo "<br>";
        // echo "User password  is:".$request->password;
        // echo "<br>";
        // echo "User email is:".$request->email;
        // Validation
        $request->validate([
            'name'=>'required|min:5|max:10',
            'password'=>'required|min:8',
            'email'=>'required|email',
            'skill'=>'required'
        ]);
    }

    // ============User Form  2Requset Passing=======//
    function addUser2(Request $request)
    {

        echo "The city is:".$request->city;
        echo "<br>";
        echo "The gender is:".$request->gender;
        echo "<br>";
        echo "The age is:".$request->age;
        echo "<br>";
        print_r($request->skill);
    }
}
