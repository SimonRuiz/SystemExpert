<?php
class KnowledgeBase{

    public static function addToBase($nb_side, $conditions, $reponse){
        if(!empty($conditions)) {
            $strCdts = implode(",", $conditions);
        }
        else $strCdts = 'null';
        try {
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            $bdd = new PDO('mysql:host=localhost;dbname=system_expert', 'root', '', $pdo_options);

            $req = $bdd->prepare('INSERT INTO knowledge_base (nb_side, conditions, reponse) VALUES (:nb, :cdts, :rep)');
            $req->bindParam(':nb', $nb_side);
            $req->bindParam(':cdts', $strCdts);
            $req->bindParam(':rep', $reponse);
            $req->execute();
        }
        catch (Exception $e){
            echo $e;
        }
    }

    public static function checkKnowledgeBase($nb_side, $conditions){
        if(!empty($conditions)) {
            $strCdts = implode(",", $conditions);
        }
        else $strCdts = 'null';
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bdd = new PDO('mysql:host=localhost;dbname=system_expert', 'root', '', $pdo_options);

        $req = $bdd->prepare('SELECT reponse FROM knowledge_base WHERE nb_side = :nbSide AND conditions = :conditions');
        $req->bindParam(':nbSide', $nb_side, PDO::PARAM_INT);
        $req->bindParam(':conditions', $strCdts, PDO::PARAM_STR);
        $req->execute();

        $data = $req->fetch();
        $reponse = $data['reponse'];
        return $reponse;
    }
}