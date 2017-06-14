<?php

function writeXML($nbSide, $conditions, $solution){

    //$doc = new DOMDocument('1.0', 'utf-8');
    //$doc->load('./knowledge_base.xml');

    $doc = fopen("knowledge_base.xml", "r+");
    try{
        $f = $doc->createElement("forme" );
        $doc->appendChild($f);
    }
    catch (DOMException $e){
        echo e;
    }

//nombre de coté
    $nbs = $doc->createElement( "nbSide" );
    $nbs->appendChild(
        $doc->createTextNode( $nbSide )
    );
    $f->appendChild( $nbs );

    //les conditions

    foreach ($conditions as $cdt){
        $cdt = $doc->createElement( "condition" );
        $cdt->appendChild(
            $doc->createTextNode( $solution )
        );
        $f->appendChild($cdt);
    }
// la solution
    $s = $doc->createElement( "solution" );
    $s->appendChild(
        $doc->createTextNode( $solution )
    );
    $f->appendChild( $s );

    $doc->saveXML();
    echo "Enregistrer dans la base de fait";
}