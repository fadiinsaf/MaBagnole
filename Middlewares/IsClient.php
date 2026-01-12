<?php
class IsClient
{
        public static function handle(){
        if ($_SESSION["user"]->getUserRole() !== "client") {
        header("Location: " . User::RedirectPath($_SESSION["user"]));
        }
    }

}