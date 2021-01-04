<?php

/**
 * CLC 1
 * LoginController 1
 * Authors: Dylan Dorn, Daniel Cender, Nathaniel Kumar, Ray Omoregie
 * 12-20-2020
 * File that handles all login operations
 * Verifies whether a user is allowed to login
 *
 */ 

namespace App\Http\Controllers;

use App\Models\UserModel;
use App\Services\Business\SecurityService;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request){
        
        //variables
        $username = $request->input('username');
        $password = $request->input('password');
        
        //initialize login request model
        $user = new UserModel(-1, $username, $password);
       
        //initialize security business service
        $service = new SecurityService();
        $status = $service->login($user);
        
        //check if login passed
        if($status){
            $data = ['model' => $user];
            //return if passed
            return view('loginPassed')->with($data);
        } else {
            //return if failed
            return view('loginFailed');
        }
        
    }
}