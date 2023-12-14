<?php

namespace App\models;
require __DIR__ . '/../../vendor/autoload.php';

use App\database\Database;



class User 
{
    private $database;
    private $email;
    private $password;
    private $name;
    private $role;

    public function __construct($name, $email, $password, $role)
    {
        $this->database = Database::getInstance();
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }




    public function getRole()
    {
        return $this->role;
    }

     public function getPassword()
    {
        return $this->password;
    }
    public function setRole()
    {
        return $this->role;
    }

     public function setPassword()
    {
        return $this->password;
    }
 
    public static function create($name, $email, $password, $role)
    {
        $database = Database::getInstance();
        $sql = "INSERT INTO `user`(`name`, `email`, `password`, `role`) VALUES (?, ?, ?, ?)";
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $database->getConnection()->prepare($sql);
        $stmt->bind_param("sssi", $name, $email, $hashedPassword, $role);
        $stmt->execute();
    }

    public static function getUserByEmail($email)
    {
        $database = Database::getInstance();
        $query = "SELECT * FROM `user` WHERE `email` = ?";
        $stmt = $database->getConnection()->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $userData = $result->fetch_assoc();

          $name =   $userData["name"];
          $email =   $userData["email"];
          $password =   $userData["password"];
          $role =   $userData["role"];

            
            return new User($name, $email, $password,$role);



        } else {
            return null; 
        }
    }

    public function getUsers()
    {
        $query = "SELECT * FROM `user`";
        $stmt = $this->database->getConnection()->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

        $users = array();
        while ($userData = $result->fetch_assoc()) {
            $users[] = new User($userData['name'], $userData['email'], $userData['password'], $userData['role']);
        }
        return $users;

    }
}
