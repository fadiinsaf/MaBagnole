<?php 
    session_start();

    require_once __DIR__ . "/../Database/Database.php";
    require_once __DIR__ . "/../Models/Admin.php";
    require_once __DIR__ . "/../Models/User.php";
    require_once __DIR__ . "/../Models/Client.php";

    $db = Database::getConnection();
    User::$errors = [];
    User::$user = [];

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        
        $password = $_POST["password"] ?? "";
        $email = $_POST["email"] ?? "";
        $email = trim($email);

        if(empty($email) || empty($password)){
            $_SESSION["errors"]["fields"] = "Please fill this field !";
            header("Location: /index.php");
            exit();
        }

        if(!User::login($db, $email, $password))
        {
            $_SESSION["errors"] = User::$errors;
            $_SESSION["old_data"] = ['email' => $email];
            header("Location: /index.php");
            exit();
        }

        unset($_SESSION["errors"]);

        if(User::$user["role"] === "admin"){
            $admin = new Admin((int)User::$user["id"],User::$user["name"],User::$user["email"],User::$user["password"]);
            $_SESSION["user"] = $admin;
            header( "Location: " . User::redirectPath($admin));
            exit();
        }

        else
        {
            $Client = new Client((int)User::$user["id"],User::$user["name"],User::$user["email"],User::$user["password"],User::$user["is_active"]);
            $_SESSION["user"] = $Client;
            header("Location: " . User::redirectPath($Client));
            exit();
        }
    }

    header("Location: ../index.php");
    exit();
?>