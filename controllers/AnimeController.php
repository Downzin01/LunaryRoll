
<?php
require_once 'models/Anime.php';

class AnimeController {
    private $animeModel;

    public function __construct($pdo) {
        $this->animeModel = new Anime($pdo);
    }

    public function listarAnimes() {
        $animes = $this->animeModel->getAllAnimes();
        include 'views/anime/index.php';
    }

    public function verDetalhe($id) {
        $anime = $this->animeModel->getAnimeById($id);
        include 'views/anime/detalhe.php';
    }
}
?>
    