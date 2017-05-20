<?php
//faire un fichier xml
if(!empty($_POST)){
    $nb_side = $_POST['nb_side'];

    if($nb_side == 3) {
        //Test les boutons radio t_cd
        if(isset($_POST['t_cd']) == true){
            $t_cd = $_POST['t_cd'];
        }
        if(isset($_POST['angD']) == true){
            $angD = $_POST['angD'];
        }

        if($angD == 'angD'){
            if($t_cd == 'iso'){
                echo "triangle rectangle isocèle";
            }
            else if ($t_cd == 'qq'){
                echo "triangle rectangle";
            }
            else{
                echo "il n'existe aucun triangle de ce type";
            }
        }
        else if($t_cd == 'iso') {
            echo "triangle isocèle";
        }
        else if($t_cd == 'qq'){
            echo "triangle quelconque";
        }
        else if($t_cd == 'equ'){
            echo "triangle équilatérale";
        }
    }
}