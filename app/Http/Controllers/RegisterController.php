<?php

/**
 * CLC 1
 * RegisterController 1
 * Authors: Dylan Dorn
 * 12-20-2020
 * File that handles all registration operations and 
 * verifies whether a user is allowed to register
 */

namespace App\Http\Controllers;

use App\Models\UserModel;
use App\Services\Business\SecurityService;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    
    //function that returns register view
    public function index(Request $request) 
    {
    
    }
}