<?php

include_once 'connexion.php';
/**
 * Check what have been return by the form
 * and set them into conditions to find something
 */
if(!empty($_POST)){

    $nb_side = $_POST['nb_side'];
    $forme = "";
    $conditions = array();
    if($nb_side == 1){
        $forme = 'cer';
    }
    if($nb_side == 2){
        $forme = 'lin';
    }
    if($nb_side == 3) {
        $forme = 'tri';
        $t_cd = "";
        $t_angD = "";

        if (isset($_POST['t_cd']) == true) {
            $t_cd = $_POST['t_cd'];
        }
        if (isset($_POST['t_angD']) == true) {
            $t_angD = $_POST['t_angD'];
        }

        if($t_cd != ""){
            $conditions[] = $t_cd;
        }
        if($t_angD != ""){
            $conditions[] = $t_angD;
        }
    }
    if($nb_side == 4){
        $forme = 'qua';
        $q_para = "";
        $q_angD = "";
        $q_sameLenght = "";
        $q_para_y = "";
        if(isset($_POST['q_cdPara_Y']) == true){
            $q_para_y = $_POST['q_cdPara_Y'];
        }
        if(isset($_POST['q_cdPara']) == true){
            $q_para = $_POST['q_cdPara'];
        }
        if(isset($_POST['q_angD']) == true){
            $q_angD = $_POST['q_angD'];
        }
        if(isset($_POST['q_sameLenght']) == true){
            $q_sameLenght = $_POST['q_sameLenght'];
        }

        if($q_para != ""){
            $conditions[] = $q_para;
        }
        if($q_sameLenght != ""){
            $conditions[] = $q_sameLenght;
        }
        if($q_angD != ""){
            $conditions[] = $q_angD;
        }
    }

    $rep = KnowledgeBase::checkKnowledgeBase($nb_side, $conditions);

    if($rep != ''){
        echo $rep;
    }
    else {
        include_once('rule-based.php');
    }
    /*if($rep->fetch() != false){
        $data = $rep->fetch();
        echo $data['reponse'];
        //var_dump($rep->fetch());
        //var_dump($rep->fetch(PDO::FETCH_LAZY));
        $result = $rep->fetch(PDO::FETCH_LAZY);
        echo $result;
        print_r($result);
        while ($row = $rep->fetch(PDO::FETCH_ASSOC))
        {
            echo $row['reponse'];
        }
    }
*/
}