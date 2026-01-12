<?php

require_once __DIR__ . "/../Database/Database.php";
require_once __DIR__ . "/../Models/Comment.php";

if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["visibility"]) && isset($_GET["id"])) {
    $visibility = (int)$_GET["visibility"];
    $id = (int)$_GET["id"];

    if (!in_array($visibility, [0, 1], true)) {
        header("Location: /Views/adminReviewsManagment.php?error=invalid_visibility");
        exit();
    }

    try{
        switch($visibility)
        {
            case 0:

                Comment::unhiddeComment($id);
                break;

            case 1:

                Comment::hiddeComment($id);
                break;

            default:
            header("Location: /Views/adminReviewsManagment.php?error=invalid_visibility");
                exit();
        }
        
    }
    catch(PDOException $e)
    {
        die("Database Error: " . $e->getMessage());
    }
}

header("Location: /Views/adminReviewsManagment.php");
exit();