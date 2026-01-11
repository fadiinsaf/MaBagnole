<?php
class Car
{
    private int $id;
    private string $model;
    private string $brand;
    private int $price;
    private bool $availablity;
    private int $idCategory;

    private static ?PDO $db = null;

    private static function getDB(): PDO
    {
        if (self::$db === null) {
            self::$db = Database::getConnection();
        }
        return self::$db;
    }

    public function __construct(int $id,string $model,string $beand, int $price,bool $availablity,int $idCategory) {
        $this->id = $id;
        $this->model = $model;
        $this->price = $price;
        $this->availablity = $availablity;
        $this->idCategory = $idCategory;
    }

    public function getId(): int { return $this->id; }
    public function getModel(): string { return $this->model; }
    public function isavAilable(): bool { return $this->availablity;}

    public static function getCarsByAvailability(int $availability): array
    {
        $stmt = self::getDB()->prepare("SELECT * FROM cars WHERE availability = ?");
        $stmt->execute([$availability]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getAllCars(int $limit = 1000): array
    {
        return self::getDB()
            ->query("SELECT *,c.description AS car_description , c.id AS car_id FROM cars c INNER JOIN categories ca ON c.id_category = ca.id LIMIT $limit")
            ->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getPaginated(int $limit, int $offset): array
    {
        $stmt = self::getDB()->prepare("SELECT * FROM cars LIMIT :limit OFFSET :offset");

        $stmt->bindValue(":limit", $limit, PDO::PARAM_INT);
        $stmt->bindValue(":offset", $offset, PDO::PARAM_INT);

        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getCarsCount(): int
    {
        return self::getDB()
            ->query("SELECT COUNT(*) FROM cars")
            ->fetchColumn();
    }

    public static function getCar(int $id): mixed
    {
        $stmt = self::getDB()->prepare("SELECT *,c.description AS car_description , c.id AS car_id FROM cars c INNER JOIN categories ca ON c.id_category = ca.id WHERE c.id = :i");
        $stmt->bindParam(":i", $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function searchCarByModel(string $model): mixed
    {
        $model = "%" . $model . "%";
        $stmt = self::getDB()->prepare("SELECT *,c.description AS car_description , c.id AS car_id FROM cars c INNER JOIN categories ca ON c.id_category = ca.id WHERE c.model LIKE :m ");
        $stmt->bindParam(":m", $model, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function addCars(array $brand, array $model,array $pricePerDay, array $image, array $idCategory, array $description): bool
    {
        for($i = 0; $i < count($brand); $i++)
        {
            $stmt = self::getDB()->prepare(
                "INSERT INTO cars (brand, model, pricePerDay, image, id_category, description) 
                VALUES (?,?,?,?,?,?)");
            $status = $stmt->execute([$brand[$i], $model[$i], $pricePerDay[$i], $image[$i], $idCategory[$i], $description[$i]]);
        }

        if(!$status)
        {
            return false;
        }

        return true;
    }
    public static function editCars(string $brand, string $model,int $pricePerDay, string $image, int $idCategory, int $availability, string $description, int $id): bool
    {

            $stmt = self::getDB()->prepare(
                "UPDATE cars SET brand = ?, model = ?, pricePerDay = ?, image = ?, id_category = ?, availability = ?, description = ? WHERE id = ?");
                return $stmt->execute([$brand, $model, $pricePerDay, $image, $idCategory, $availability, $description, $id]);
    }

    public static function deleteCar(int $id): bool {
        $stmt = self::getDB()->prepare("DELETE FROM cars WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public static function getByCategory(int $categoryId): array
    {
        $stmt = self::getDB()->prepare(
            "SELECT * FROM cars WHERE id_category = ?"
        );
        $stmt->execute([$categoryId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}