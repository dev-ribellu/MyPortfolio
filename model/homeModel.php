<?php
class HomeModel {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    // Récupère les informations de l'utilisateur (on suppose un seul utilisateur)
    public function getInfo() {
        $sql = 'SELECT * FROM utilisateur LIMIT 1';
        $statement = $this->pdo->query($sql);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    // Récupère les emails associés à l'utilisateur
    public function getEmails($utilisateur_id) {
        $sql = 'SELECT * FROM emails WHERE utilisateur_id = :id';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $utilisateur_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Récupère les compétences liées à l'utilisateur avec le niveau
    public function getCompetences($utilisateur_id) {
        $sql = "SELECT c.nom, uc.niveau 
                FROM competences c 
                JOIN utilisateur_competences uc ON c.id = uc.competence_id 
                WHERE uc.utilisateur_id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $utilisateur_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Récupère les projets associés à l'utilisateur
    public function getProjets($utilisateur_id) {
        $sql = "SELECT p.* 
                FROM projets p 
                JOIN utilisateur_projets up ON p.id = up.projet_id 
                WHERE up.utilisateur_id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $utilisateur_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Récupère les technologies associées à un projet donné
    public function getTechnologiesByProjet($projet_id) {
        $sql = "SELECT t.nom 
                FROM technologies t 
                JOIN projet_technologies pt ON t.id = pt.technologie_id 
                WHERE pt.projet_id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $projet_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Récupère les images associées à un projet
    public function getImagesProjet($projet_id) {
        $sql = "SELECT image_url 
                FROM images_projets 
                WHERE projet_id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $projet_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Récupère les métiers liés à l'utilisateur
    public function getMetiers($utilisateur_id) {
        $sql = "SELECT m.nom 
                FROM metiers m 
                JOIN utilisateur_metiers um ON m.id = um.metier_id 
                WHERE um.utilisateur_id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $utilisateur_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>