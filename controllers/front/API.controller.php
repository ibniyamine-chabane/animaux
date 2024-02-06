<?php 

class APIcontroller {
    public function getAnimals() {
        echo "Envoi des informations sur les animaux";
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