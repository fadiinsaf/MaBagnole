<?php
    require_once __DIR__ . "/../Models/User.php";
class Client extends User
{
    private bool $isActive;

    public function __construct(int $id,string $name,string $email,string $password,bool $isActive) {
        parent::__construct($id, $name, $email, $password, 'client');
        $this->isActive = $isActive;
    }

    public function isActive(): bool
    {
        return $this->isActive;
    }

    public static function  inscription(PDO $db, string $name, string $email, string $password, string $confirm_password): bool
    {
        if(!preg_match("/^[A-Za-z\s]{2,50}$/" , $name)){
            self::$errors["name"] = "Name invalid !";
            return false;
        }

        if(!preg_match("/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/" , $email)){
            self::$errors["email"] = "Email invalid !";
            return false;
        }

        if(strlen($password) > 59){
            self::$errors["password_length"] = "Password is too long !";
            return false;
        }

        if($password !== $confirm_password){
            self::$errors["passwords_match"] = "Passwords Not Match !";
            return false;
        }

        if(!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%^&*]).{8,}$/" , $password)){
            self::$errors["password"] = "Password is Weak / Invalid, Try Strong Passwords !";
            return false;
        }

        if(static::findUser($db ,$email)){
            static::$errors["email_exists"] = "Email already exists !"; 
            return false;
        }

        return true;
    }

    public static function activateClient(int $id): bool
    {
        $stmt = self::getDB()->prepare(
            "UPDATE users SET is_active = 1 WHERE id = ?"
        );
        return $stmt->execute([$id]);
    }
    public static function deactivateClient(int $id): bool
    {
        $stmt = self::getDB()->prepare(
            "UPDATE users SET is_active = 0 WHERE id = ?"
        );
        return $stmt->execute([$id]);
    }
        public function __tostring(): string
    {
        return parent::__tostring() . "isActive={$this->isActive}";
    }
}
