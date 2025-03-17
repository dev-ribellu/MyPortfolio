<?php
    require_once 'model/HomeModel.php';
    class HomeController {
        private $homeModel;
        public function __construct(HomeModel $homeModel) {
            $this->homeModel = $homeModel;
        }
    // Action pour afficher tous les utilisateurs
        public function getTitle() {
            $info = $this->homeModel->getInfo();
            return $info['title'];
        }
        public function getsubTitle() {
            $info = $this->homeModel->getInfo();
            return $info['subtitle'];
        }
        public function getShowIcons() {
            $info = $this->homeModel->getInfo();
            return $info['showicons'];
        }
    // Autres actions pour la gestion des utilisateurs...
    }
?>