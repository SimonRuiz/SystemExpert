<?php
/*
 * Interface utilisateur : input (defini toutes les conditions que l'on recherche
 * Moteur d'inférence / inference engine : récupére l'input
 * regarde dans la base de fait / knowledge base si les conditions recherché ont déjà était diagnostiqué.
 * Si non parcours en forward chaining dans la base de régles si les conditions sont répertorié
 * en cas de réussite, enregistre les conditions et la réponse dans la base de fait
 * sinon renvoye une erreur NotFound
 */


include ("inference_engine.php");
include ("interface.php");
?>