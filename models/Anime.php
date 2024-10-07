
<?php
class Anime {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllAnimes() {
        $stmt = $this->pdo->prepare("SELECT * FROM animes");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAnimeById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM animes WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
    