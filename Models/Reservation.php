<?php
class Reservation
{
    private int $id;
    private int $idClient;
    private int $idCar;
    private string $startDate;
    private string $endDate;
    private string $departureLocation;
    private string $returnLocation;

    private static ?PDO $db = null;

    private static function getDB(): PDO
    {
        if (self::$db === null) {
            self::$db = Database::getConnection();
        }
        return self::$db;
    }

    public function __construct(int $id,int $idCar,int $idClient,string $startDate,string $endDate) {
        $this->id = $id;
        $this->idCar = $idCar;
        $this->idClient = $idClient;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    public static function createReservation(int $idclient,int $idcar, string $departureLocation, string $returnLocation,string $startDate,string $endDate): bool {
        $stmt = self::getDB()->prepare("INSERT INTO reservations (id_client, id_car , departureLocation , returnLocation, reservationDateStart, reservationDateEnd)VALUES (?,?,?,?,?,?)");
        return $stmt->execute([$idclient, $idcar,$departureLocation,$returnLocation, $startDate, $endDate]);
    }
    public static function rejectResrevation(int $id): bool {
        $stmt = self::getDB()->prepare("UPDATE reservations SET STATUS = ? WHERE id = ?");
        return $stmt->execute(["rejected" , $id]);
    }

    public static function cancelResrevation(int $id): bool {
        $stmt = self::getDB()->prepare("UPDATE reservations SET STATUS = ? WHERE id = ?");
        return $stmt->execute(["cancelled" , $id]);
    }

    public static function approveReservation(int $id): bool {
        $stmt = self::getDB()->prepare("UPDATE reservations SET STATUS = ? WHERE id = ?");
        return $stmt->execute(["confirmed" , $id]);
    }

    public static function getAllReservations(int $limit = 1000): array {
        $limit = (int)$limit;
        $stmt = self::getDB()->query("SELECT *, r.id AS id_reservation FROM reservations r INNER JOIN cars c ON c.id = r.id_car INNER JOIN users u ON r.id_client = u.id LIMIT $limit");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getReservationsByStatus(string $status): array {
        $stmt = self::getDB()->prepare("SELECT * FROM reservations WHERE STATUS = ?");
        $stmt->execute([$status]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function getUserReservations(int $id): array {
        $stmt = self::getDB()->prepare("SELECT *,r.id AS reservation_id, c.id AS car_id FROM reservations r INNER JOIN cars c ON c.id = r.id_car WHERE r.id_client = ?");
        $stmt->execute([$id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}