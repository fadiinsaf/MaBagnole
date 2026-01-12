<?php
class Category
{
    private int $id;
    private string $name;
    private string $description;

    private static ?PDO $db = null;

    private static function getDB(): PDO
    {
        if (self::$db === null) {
            self::$db = Database::getConnection();
        }
        return self::$db;
    }

    public function __construct(int $id, string $name, string $description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
    }

    public function getId(): int { return $this->id; }
    public function getName(): string { return $this->name; }
    public function getDescription(): string { return $this->description; }

    public static function getAllCategories(): array
    {
        return self::getDB()
            ->query("SELECT * FROM categories")
            ->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getCarsCountInCategories(): array
    {
        $tab = self::getDB()
            ->query("SELECT  name, COUNT(c.id) AS count FROM categories ca INNER JOIN cars c ON ca.id = c.id_category GROUP BY ca.name")
            ->fetchAll(PDO::FETCH_ASSOC);

        $tabA = [];
        foreach($tab as $t){
            $tabA[$t["name"]] =  $t["count"];
        }
        return $tabA;
    }

    public static function createCategory(array $name, array $description): bool
    {
        for($i = 0; $i < count($name); $i++)
        {
            $stmt = self::getDB()->prepare("INSERT INTO categories (name, description) VALUES (?, ?)");
            $status = $stmt->execute([$name[$i],$description[$i]]);
        }

        if(!$status)
        {
            return false;
        }

        return true;
    }

    public static function delteCategory(int $id): bool
    {
        $stmt = self::getDB()->prepare(
            "DELETE FROM categories WHERE id = ?"
        );
        return $stmt->execute([$id]);
    }

    public static function editCategory(string $name, string $description, int $id): bool
    {

            $stmt = self::getDB()->prepare(
                "UPDATE categories SET name = ?, description = ? WHERE id = ?");
                return $stmt->execute([$name, $description, $id]);
    }
}
