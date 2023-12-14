<?php
namespace App\controllers\auth;
require __DIR__ . '/../../../vendor/autoload.php';
use App\models\User;
session_start();

class Authentificate
{
    public function register($name, $email, $password, $confirmPassword, $role)
    {
        $error = $this->validateRegister($name, $email, $password, $confirmPassword);

        if (empty($error)) {
            $user = User::getUserByEmail($email);

            if ($user) {
                $error = 'Username or email has already been taken';
            } elseif ($password !== $confirmPassword) {
                $error = 'Passwords do not match';
            } else {
                User::create($name, $email, $password, $role);
                header("Location: ../../views/auth/login.php");
                exit();
            }
        }
    }

     public function login($email, $password)
    {
        $user = User::getUserByEmail($email);

        var_dump($user);
        if ($user) {
            
            if (password_verify($password,$user->getPassword())) {
                
                $_SESSION['role'] = $user->getRole();
                $redirectPath = ($_SESSION['role'] == 1) ? "../../../views/admin/" : "../../../views/client/";
                header("Location: $redirectPath");
                exit();
            } else {
                $_SESSION['error'] = 'Incorrect password';
            }
        } else {
            $_SESSION['error'] = 'User not found';
        }
    }

    public function logout()
    {
        session_destroy();
        header("location: ../../views/auth/login.php");
        exit();
    } 

    private function validateRegister($name, $email, $password, $confirmPassword)
    {
        $error = '';
        if (empty($name)) {
            $error .= 'Name is required. ';
        }
        if (empty($email)) {
            $error .= 'Email is required. ';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error .= 'Invalid email. ';
        }
        if (empty($password)) {
            $error .= 'Password is required. ';
        }
        if (empty($confirmPassword)) {
            $error .= 'Confirm password is required. ';
        }
        if (!empty($error)) {
            $error = 'Please fix the following errors: ' . $error;
        }

        return $error;
    }
}

if (isset($_POST['register'])) {
    
    $authentication = new Authentificate();
    $authentication->register($_POST['name'], $_POST['email'], $_POST['password'], $_POST['confirm_password'], 2);
}

if (isset($_POST['login'])) {
    $authentication = new Authentificate();
    $authentication->login($_POST['email'], $_POST['password']);
}

if (isset($_POST['logout'])) {
    $authentication = new Authentificate();
    $authentication->logout();
} 
?>
