<?php

/**
 * CLC 1
 * UserModel 1
 * Authors: Dylan Dorn, Daniel Cender, Nathaniel Kumar, Ray Omoregie
 * 12-20-2020
 * Model class containing data neccessary for users
 *
 */

namespace App\Models;

class UserModel
{
    //class variables 
    private $username;
    private $password;
    
    //constructor
    public function __construct($username, $password){
        $this->username = $username;
        $this->password = $password;
    }
    
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
    
    //getters and setters
    
    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }
    
    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }
    
    /**
     * @return mixed
     */
    public function setUsername($username)
    {
        return $this->username;
    }
    
    /**
     * @return mixed
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
    
}