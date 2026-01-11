<?php
class Comment
{
    private static ?PDO $db = null;
    private static function getDB(): PDO
    {
        if (self::$db === null) {
            self::$db = Database::getConnection();
        }
        return self::$db;
    }

    public static function addComment(int $idclient,int $idCar,string $comment,int $rating): bool {
        $stmt = self::getDB()->prepare("INSERT INTO comments (id_client, id_car, comment_text, rating)VALUES (?,?,?,?)");
        return $stmt->execute([$idclient, $idCar, $comment, $rating]);
    }

    public static function getAllUsersComments(): array {
        return self::getDB()
        ->query("SELECT *, c.id  AS id_comment FROM comments c INNER JOIN users u ON c.id_client = u.id INNER JOIN cars ca ON c.id_car = ca.id")
        ->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getAllVisibleComments(): array {
        return self::getDB()
        ->query("SELECT * FROM comments WHERE deleted_at IS NULL AND  visibility = 1")
        ->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function getCarComments(int $id_car): array{
        $stmt = self::getDB()
        ->prepare("SELECT *, c.id as id_comment FROM comments c INNER JOIN users u ON u.id = c.id_client WHERE c.deleted_at IS NULL AND  c.visibility = 1 AND c.id_car = ?");
        $stmt->execute([$id_car]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function deleteComment(int $id): bool
    {
        $stmt = self::getDB()->prepare(
            "UPDATE comments SET deleted_at = NOW() WHERE id = ?"
        );
        return $stmt->execute([$id]);
    }

    public static function hiddeComment(int $id): bool
    {
        $stmt = self::getDB()->prepare(
            "UPDATE comments SET visibility = 0 WHERE id = ?"
        );
        return $stmt->execute([$id]);
    }

    public static function unhiddeComment(int $id): bool
    {
        $stmt = self::getDB()->prepare(
            "UPDATE comments SET visibility = 1 WHERE id = ?"
        );
        return $stmt->execute([$id]);
    }

    public static function getLastInseartedId()
    {
        return self::getDB()->lastInsertId();
    }

}
