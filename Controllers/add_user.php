<?php 
    session_start();

    require_once __DIR__ . "/../Database/Database.php";
    require_once __DIR__ . "/../Models/User.php";
    require_once __DIR__ . "/../Models/Client.php";

    $db = Database::getConnection();

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        
        $name = $_POST["name"] ?? "";
        $email = $_POST["email"] ?? "";
        $password = $_POST["password"] ?? "";
        $confirm_password = $_POST["confirm_password"] ?? "";
        $accept_terms = $_POST["accept_terms"] ?? "";

        $name = trim($name);
        $email = trim($email);

        $errors = [];

        if(empty($name) || empty($email) || empty($password) || empty($confirm_password)){
            $_SESSION['errors']["fields"] = "Please fill this field !";
            header("Location: /Views/register.php");
            exit();
        }

        if(empty($accept_terms)){
             $_SESSION['errors']["accept_terms"] = "You must Accept The Terms of Service and Privacy Policy !";
            header("Location: /Views/register.php");
            exit();
        }

        
        if(!Client::inscription($db, $name, $email ,$password,  $confirm_password)){
            $_SESSION["errors"] = Client::getErrors();

            $_SESSION["old_data"] = [
            'name' => $name,
            'email' => $email
        ];
            header("Location: /Views/register.php");
            exit();
        }

        if(User::addUser($name ,$email ,"client" , $password)){
            unset($_SESSION['errors']);
            unset($_SESSION['old_data']);

            header("Location: ../index.php");
            exit();
        }

        $_SESSION['errors']['database'] = "Registration failed. Please try again!";
        $_SESSION['old_data'] = [
            'name' => $name,
            'email' => $email
        ];
        header("Location: /Views/register.php");
        exit();
    }
    header("Location: /Views/register.php");
    exit();
?>