<?php

class IsAdmin{
    public static function handle(){
        if ($_SESSION["user"]->getUserRole() !== "admin") {
            
            header("Location: " . User::RedirectPath($_SESSION["user"]));
        }
    }
}