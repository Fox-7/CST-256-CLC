<?php

/**
 * CLC 1
 * SecurityDAO 1
 * Authors: Dylan Dorn, Daniel Cender, Nathaniel Kumar, Ray Omoregie
 * 12-20-2020
 * File that contains the functions required for validating user data
 *
 */ 

namespace App\Services\Data;

use \PDO;
use PDOException;
use App\Services\Utility\DatabaseException;
use App\Models\UserModel;

class SecurityDAO
{
    private $db = NULL;
    
    //constructor
    public function __construct($db){
        $this->db = $db;
    }
    
    public function findByUser(UserModel $user){
        
            //Pass object variables to local variables
            $name = $user->getUsername();
            $pw = $user->getPassword();
            
            //Find users by passed model variables
            $stmt = $this->db->prepare('SELECT ID, USERNAME, PASSWORD FROM USERS WHERE USERNAME = :username AND PASSWORD = :password');
            $stmt->bindParam(':username', $name);
            $stmt->bindParam(':password', $pw);
            $stmt->execute();
            
            //Check to see if there is a match
            if ($stmt->rowCount() == 1){
                
                //Success if there is a match
                return true;
            } else {
                
                //Fail if there is no match       
                return false;
            }       
    }
}