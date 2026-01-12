<?php 
    require_once __DIR__ . "/../Database/Database.php";
    require_once __DIR__ . "/../Models/Reservation.php"; 
    require_once __DIR__ . "/../Models/User.php"; 
    require_once __DIR__ . "/../Models/Client.php"; 

    session_start();   

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $reservationDateStart = $_POST["reservationDateStart"];
    $reservationDateEnd = $_POST["reservationDateEnd"];
    $departureLocation = $_POST["departureLocation"];
    $returnLocation = $_POST["returnLocation"];
    $id_car = (int)$_POST["car_id"];

    if(Reservation::createReservation( $_SESSION["user"]->getUserId(),  $id_car, $departureLocation, $returnLocation,
    $reservationDateStart, $reservationDateEnd
    )){
        header("Location: /Views/fleet.php");
        exit();
        
    }

    echo "Error";
    die();
}

        header("Location: /Views/carDeatils.php?id={$id_car}");
        exit();