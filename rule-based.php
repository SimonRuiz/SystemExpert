<?php
/**
 * Check conditions, If / else if / else to find the solution
 * then add in a database the conditions and the answer found
 */
if($forme == 'cer'){
    $r = "Hénagone";
    KnowledgeBase::addToBase($nb_side,$conditions,$r);
    echo "Hénagone";
}
if($forme == 'lin'){
    $r = "Digone";
    KnowledgeBase::addToBase($nb_side,$conditions,$r);
    echo 'Digone';
}
if($forme == 'tri') {
    if ($t_angD == 'angD') {
        if ($t_cd == 'iso') {
            $r = "triangle rectangle isocèle";
            KnowledgeBase::addToBase($nb_side,$conditions,$r);
            echo "triangle rectangle isocèle";
        }
        else if ($t_cd == 'qq') {
            $r = "triangle rectangle";
            KnowledgeBase::addToBase($nb_side,$conditions,$r);
            echo "triangle rectangle";
        }
        else {
            $r = "il n'existe aucun triangle de ce type";
            KnowledgeBase::addToBase($nb_side,$conditions,$r);
            echo "il n'existe aucun triangle de ce type";
        }
    }
    else if ($t_cd == 'iso') {
        $r = "triangle isocèle";
        KnowledgeBase::addToBase($nb_side,$conditions,$r);
        echo "triangle isocèle";
    }
    else if ($t_cd == 'qq') {
        $r = "triangle quelconque";
        KnowledgeBase::addToBase($nb_side,$conditions,$r);
        echo "triangle quelconque";
    }
    else if ($t_cd == 'equ') {
        $r = "triangle équilatérale";
        KnowledgeBase::addToBase($nb_side,$conditions,$r);
        echo "triangle équilatérale";
    }
}

if($forme == 'qua'){
    if($q_para_y == 'q_para') {
        if ($q_para == 'para_2') {
            $r = "Trapéze";
            KnowledgeBase::addToBase($nb_side,$conditions,$r);
            echo 'Trapéze';
        } else if ($q_para == 'para_4') {
            if ($q_sameLenght == 'sameLenght') {
                if ($q_angD == 'angD') {
                    $r = "Carré";
                    KnowledgeBase::addToBase($nb_side,$conditions,$r);
                    echo 'Carré';
                }
                else {
                    $r = "Losange";
                    KnowledgeBase::addToBase($nb_side,$conditions,$r);
                    echo 'Losange';
                }
            }
            else if ($q_angD == 'angD') {
                $r = "Rectangle";
                KnowledgeBase::addToBase($nb_side,$conditions,$r);
                echo 'Rectangle';
            }
            else{
                $r = "Parallélograme";
                KnowledgeBase::addToBase($nb_side,$conditions,$r);
                echo 'Parallélograme';
            }
        }
    }
    else {
        $r = "quadrilatère";
        KnowledgeBase::addToBase($nb_side,$conditions,$r);
        echo 'quadrilatère';
    }
}

