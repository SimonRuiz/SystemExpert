<?php
/*
 * Interface utilisateur : input (defini toutes les conditions que l'on recherche
 * Moteur d'inférence : récupére l'input
 * regarde dans la base de fait si les conditions recherché ont déjà était diagnostiqué.
 * Si non parcours en forward chaining dans la base de régles si les conditions sont répertorié
 * en cas de réussite, enregistre les conditions et la réponse dans la base de fait
 * sinon renvoye une erreur NotFound
 */

?>

<script type="text/javascript">
    function ta_super_fonction(select) {
        if(select.selectedIndex==0) {
            document.getElementById('triangle').style.display = '';
            document.getElementById('rectangle').style.display = 'none';
            document.getElementById('pentagone').style.display = 'none';
        }
        if(select.selectedIndex==1) {
            document.getElementById('triangle').style.display = 'none';
            document.getElementById('rectangle').style.display = '';
            document.getElementById('pentagone').style.display = 'none';
        }
        if(select.selectedIndex==2) {
            document.getElementById('triangle').style.display = 'none';
            document.getElementById('rectangle').style.display = 'none';
            document.getElementById('pentagone').style.display = '';
        }
    }
</script>

<select  name="serveur" onchange="ta_super_fonction(this)">
    <option value="tri">Triangle</option>
    <option value="rec">Rectangle</option>
    <!--Polygone régulier tout les cotés sont de la même taille-->
    <option value="pen">Pentagone</option>
    <!-- <option value="hex">Hexagone</option>
     <option value="oct">Octogone</option>
     <option value="dec">Décagone</option>
     <option value="doc">Dodécagone</option>
     <option value="ico">Icosagone</option>-->
</select>

    <p class="text_contenu"><b>Longueur tranches : </b></p>

<div id="triangle" style="display:none;">
    Tranche 1 : <input type=text name="input" id="tri1" value="">
    Tranche 2 : <input type=text name="input" id="tri2" value="">
    Tranche 3 : <input type=text name="input" id="tri3" value="">
</div>

<div id="rectangle" style="display:none;">
    Tranche 1 : <input type=text name="input" id="rec1" value="">
    Tranche 2 : <input type=text name="input" id="rec2" value="">
    Tranche 3 : <input type=text name="input" id="rec3" value="">
    Tranche 4 : <input type=text name="input" id="rec4" value="">
</div>

<div id="pentagone" style="display:none;">
    Tranche 1 : <input type=text name="input" id="pen1" value="">
    Tranche 2 : <input type=text name="input" id="pen2" value="">
    Tranche 3 : <input type=text name="input" id="pen3" value="">
    Tranche 4 : <input type=text name="input" id="pen4" value="">
    Tranche 5 : <input type=text name="input" id="pen5" value="">
</div>
