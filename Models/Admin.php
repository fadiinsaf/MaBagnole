<?php
    require_once __DIR__ . "/../Models/User.php";
class Admin extends User
{
    public function __construct(int $id,string $name,string $email,string $password) {
        parent::__construct($id, $name, $email, $password, 'admin');
    }

    public static function getAllUsers(): array
    {
        return self::getDB()
            ->query("SELECT * FROM users WHERE role != 'admin'")
            ->fetchAll(PDO::FETCH_ASSOC);
    }
}