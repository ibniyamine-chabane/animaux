<?php 

require_once "models/front/API.manager.php";
class APIcontroller { 

    private $apiManager;

    public function __construct() {
        $this->apiManager = new APIManager();
    }

    public function getAnimals() {
        $animals = $this->apiManager->getDBAnimals();
        var_dump($animals);
        // echo "Envoi des informations sur les animaux";
    }

    public function getAnimal(int $idAnimal){
        echo "données JSON de l'animal ".$idAnimal." demandées";
    }

    public function getContinents(){
        echo "données JSON des continents demandées";
    }

    public function getFamilies(){
        echo "données JSON des familles demandées";
    }
}