<form method="POST" action="inference_engine.php">

    Nombre de côtés : entre 0 et 5 <input type="text" id="nb" name="nb" onkeyup="formulaire()"><br><br>
    <input type="text" id="nb_side" name="nb_side" style="display:none;">
    <!--<select>
        <option value="tri">Triangle</option>
        <option value="qua">quadrilatere</option>
        <option value="pen">Pentagone</option>
         <option value="hex">Hexagone</option>
         <option value="oct">Octogone</option>
         <option value="dec">Décagone</option>
         <option value="doc">Dodécagone</option>
         <option value="ico">Icosagone</option>
    </select>-->

    <div id="notfound" style="display:none;">
        Aucune solution disponible.
        <br><br>
    </div>

    <div id="noCdt" style="display:none;">
        Aucune condition disponible, un réponse connue par le système.
        <br><br>
    </div>

    <div id="triangle" style="display:none;">
        <input type= "radio" name="t_cd" value="qq"> Aucun côtés de même longueur
        <input type= "radio" name="t_cd" value="iso"> Deux côtés de même longueur
        <input type= "radio" name="t_cd" value="equ"> Troix côtés de même longueur
        <input type="checkbox" name="t_angD" value="angD"> Angle droit
        <br><br>
    </div>

    <div id="quadrilatere" style="display:none;">
        <input type="checkbox" name="q_cdPara_Y" id="q_cdPara_Y" value="q_para" onclick="quadrilatere_Para()"> Posséde des cotès parallele
        <br><br>
        <div id="quadrilatere2" style="display:none;">
            <input type= "radio" id="para_2" name="q_cdPara" value="para_2" onclick="parallele_next()"> Posséde 2 cotès paralléle
            <input type= "radio" id="para_4" name="q_cdPara" value="para_4" onclick="parallele_next()"> posséde 4 cotès parallele
        </div>
        <br>
        <div id="quadrilatere3" style="display:none;">
            <input type="checkbox" name="q_angD" value="angD"> Angle droit
            <input type="checkbox" name="q_sameLenght" value="sameLenght"> Tout les côtès sont de la même longeur
        </div>
        <br><br>
    </div>

    <div id="pentagone" style="display:none;">
    Tranche 1 : <input type=text name="pen1" id="pen1" value="">
    Tranche 2 : <input type=text name="pen1" id="pen2" value="">
    Tranche 3 : <input type=text name="pen1" id="pen3" value="">
    Tranche 4 : <input type=text name="pen1" id="pen4" value="">
    Tranche 5 : <input type=text name="pen1" id="pen5" value="">
        <br><br>
    </div>

    <input id="chercher" type=submit value="Rechercher">
</form>

<script type="text/javascript">

     //document.getElementById("nb_side").addEventListener("keypress", ta_super_fonction);
document.getElementById("nb").value = "";

function quadrilatere_Para() {
         if (document.getElementById('q_cdPara_Y').checked) {
             document.getElementById('quadrilatere2').style.display = '';
         } else {
             document.getElementById('quadrilatere2').style.display = 'none';
             document.getElementById('')
         }
     }
     function parallele_next(){
        if(document.getElementById('para_4').checked){
            document.getElementById('quadrilatere3').style.display = '';
        }
        else{
            document.getElementById('quadrilatere3').style.display = 'none';
        }
     }
    function formulaire() {
        var nb = document.getElementById('nb').value;
        document.getElementById('nb_side').value = nb;
        if(nb == 0){
            document.getElementById('notfound').style.display = '';
            document.getElementById('noCdt').style.display = 'none';
            document.getElementById('triangle').style.display = 'none';
            document.getElementById('quadrilatere').style.display = 'none';
            document.getElementById('pentagone').style.display = 'none';
            document.getElementById('chercher').style.display = 'none';
        }
        if(nb > 4){
            document.getElementById('notfound').style.display = '';
            document.getElementById('noCdt').style.display = 'none';
            document.getElementById('triangle').style.display = 'none';
            document.getElementById('quadrilatere').style.display = 'none';
            document.getElementById('pentagone').style.display = 'none';
            document.getElementById('chercher').style.display = '';
        }
        if(nb==1){
            document.getElementById('notfound').style.display = 'none';
            document.getElementById('noCdt').style.display = '';
            document.getElementById('triangle').style.display = 'none';
            document.getElementById('quadrilatere').style.display = 'none';
            document.getElementById('pentagone').style.display = 'none';
            document.getElementById('chercher').style.display = '';
        }
        else if(nb == 2){
            document.getElementById('notfound').style.display = 'none';
            document.getElementById('noCdt').style.display = '';
            document.getElementById('triangle').style.display = 'none';
            document.getElementById('quadrilatere').style.display = 'none';
            document.getElementById('pentagone').style.display = 'none';
            document.getElementById('chercher').style.display = '';
        }
        else if(nb==3) {
            document.getElementById('notfound').style.display = 'none';
            document.getElementById('noCdt').style.display = 'none';
            document.getElementById('triangle').style.display = '';
            document.getElementById('quadrilatere').style.display = 'none';
            document.getElementById('pentagone').style.display = 'none';
            document.getElementById('chercher').style.display = '';
        }
        else if(nb==4) {
            document.getElementById('notfound').style.display = 'none';
            document.getElementById('noCdt').style.display = 'none';
            document.getElementById('triangle').style.display = 'none';
            document.getElementById('quadrilatere').style.display = '';
            document.getElementById('pentagone').style.display = 'none';
            document.getElementById('chercher').style.display = '';
        }
        else{
            document.getElementById('chercher').style.display = 'none';
        }
        document.getElementById("nb").value = "";
    }

</script>