<?php 

require_once "models/Model.php";
class APIManager extends Model{
    public function getDBAnimals(){
        $request = "SELECT * 
                    FROM animal a
                    INNER JOIN famille f 
                    ON f.famille_id = a.famille_id
                    INNER JOIN animal_continent ac
                    ON ac.animal_id = a.animal_id
                    INNER JOIN continent c 
                    ON c.continent_id = ac.continent_id
                    ";
        $stmt = $this->getBdd()->prepare($request);
        $stmt->execute();
        $animals = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $animals;

    }

    public function getDBAnimal($idAnimal){
        $request = "SELECT * 
                    FROM animal a
                    INNER JOIN famille f 
                    ON f.famille_id = a.famille_id
                    INNER JOIN animal_continent ac
                    ON ac.animal_id = a.animal_id
                    INNER JOIN continent c 
                    ON c.continent_id = ac.continent_id
                    WHERE a.animal_id = :idAnimal
                    ";
        $stmt = $this->getBdd()->prepare($request);
        $stmt->bindValue(":idAnimal", $idAnimal,PDO::PARAM_INT);
        $stmt->execute();
        $lineAnimal = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $lineAnimal;

    }

}