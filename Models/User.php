<?php
class User
{
    protected int $id;
    protected string $name;
    protected string $email;
    protected string $password;
    protected string $role;

    public static array $errors = [];
    public static array $user = [];

    protected static ?PDO $db = null;

    protected static function getDB(): PDO
    {
        if (self::$db === null) {
            self::$db = Database::getConnection();
        }
        return self::$db;
    }

    protected function __construct(int $id,string $name,string $email,string $password,string $role) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }


    public function getUserId(): int
    {
        return $this->id;
    }
    public function getUserName(): string
    {
        return $this->name;
    }
    public function getUserEmail(): string
    {
        return $this->email;
    }
    public function getUserRole(): string
    {
        return $this->role;
    }


    public static function getUserByEmail(string $email): ?array
    {
        $stmt = self::getDB()->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }


    public function __tostring(): string
    {
        return "User id={$this->id}, name={$this->name}, email={$this->email}, role={$this->role}";
    }


    public static function getErrors(): array
    {
        return self::$errors;
    }

    public static function getUser(): array
    {
        return self::$user;
    }

    public static function  login(PDO $db, string $email, string $password): bool
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            self::$errors["email"] = "Email or password is invalid";
            return false;
        }

        $user = static::findUser($db, $email);

        if (!$user) 
        {
            self::$errors["email"] = "Email or password is invalid";
            return false;
        }

        if(strlen($user["password"]) < 60)
        {
            if($password !== $user["password"])
            {
                self::$errors["password"] = "Email or password is invalid";
                return false;
            }

            $hashed_password = password_hash($password, PASSWORD_BCRYPT); 
            self::updatePassword($db,$hashed_password , $user["id"]);
            $user["password"] = $hashed_password;
        }
        else
            {
                if(!password_verify($password, $user["password"])) 
                {
                    self::$errors["password"] = "Email or password is invalid";
                    return false;
                }
            }

        self::$user = $user;
        return true;
    }
    public static function  logout(): never
    {
        session_start();
        session_destroy();
        header("Location: ../index.php");
        exit();
    }
    public static function findUser(PDO $db ,$email){
        $stmt = $db->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public static function updatePassword(PDO $db, string $hashedPassword, int $id): bool
    {
        $stmt = $db->prepare("UPDATE users SET password = ? WHERE id = ?");

        if($stmt->execute([$hashedPassword, $id]))
        {
            self::$user["password"] = $hashedPassword;
            return true;
        }

        return false;
    }

    public static function addUser(string $name ,string $email ,string $role , string $password){
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $stmt = static::getDB()->prepare("INSERT INTO users (name,email,role,password) VALUES(?,?,?,?)");
        return $stmt->execute([$name,$email,$role,$hashed_password]);
    }
    
    public static function RedirectPath(User $user): string
    {
        if ($user instanceof Admin) {
            return "../Views/adminDashBoard.php";
        }

        return "../Views/home.php";
    }

    public static function showError(string $key): void
    {
        if (isset($_SESSION['errors'][$key])) 
            {
                echo '<p class="text-red-500 text-sm mt-1">'
                    . htmlspecialchars($_SESSION['errors'][$key]) .
                    '</p>';
            }
    }

}
