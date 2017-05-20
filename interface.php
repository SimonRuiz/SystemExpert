<form method="POST" action="inference_engine.php">

    Nombre de côtés : <input type="text" id="nb" name="nb" onkeyup="formulaire()"><br><br>
    <input type="text" id="nb_side" name="nb_side" style="display:none;">
    <!--<select  name="" nchange="ta_super_fonction(this)">
        <option value="tri">Triangle</option>
        <option value="qua">quadrilatere</option>
        <option value="pen">Pentagone</option>
         <option value="hex">Hexagone</option>
         <option value="oct">Octogone</option>
         <option value="dec">Décagone</option>
         <option value="doc">Dodécagone</option>
         <option value="ico">Icosagone</option>
    </select>-->

    <div id="cercle" style="display:none;">
        <input type="checkbox" id="c_cercle" name="cercle" value="cercle"> Aucun angle
        <br><br>
    </div>

    <div id="impossible" style="display:none;">
        <h1>impossible</h1>
        <br><br>
    </div>

    <div id="triangle" style="display:none;">
        <input type= "radio" name="t_cd" value="qq"> Aucun côtés de même longueur
        <input type= "radio" name="t_cd" value="iso"> Deux côtés de même longueur
        <input type= "radio" name="t_cd" value="equ"> Troix côtés de même longueur
        <input type="checkbox" id="angD" name="angD"  value="angD"> Angle droit
        <br><br>
    </div>

    <div id="quadrilatere" style="display:none;">
    Tranche 1 : <input type=text name="qua1" id="qua1" value="">
    Tranche 2 : <input type=text name="qua2" id="qua2" value="">
    Tranche 3 : <input type=text name="qua3" id="qua3" value="">
    Tranche 4 : <input type=text name="qua4" id="qua4" value="">
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

    <input type=submit value="Rechercher">
</form>

<script type="text/javascript">
//document.getElementById("nb_side").addEventListener("keypress", ta_super_fonction);
document.getElementById("nb").value = "";

    function formulaire() {
        var nb = document.getElementById('nb').value;
        document.getElementById('nb_side').value = nb;
        if(nb == 0){
            document.getElementById('cercle').style.display = 'none';
            document.getElementById('impossible').style.display = '';
            document.getElementById('triangle').style.display = 'none';
            document.getElementById('quadrilatere').style.display = 'none';
            document.getElementById('pentagone').style.display = 'none';
        }
        if(nb==1){
            document.getElementById('cercle').style.display = '';
            document.getElementById('impossible').style.display = 'none';
            document.getElementById('triangle').style.display = 'none';
            document.getElementById('quadrilatere').style.display = 'none';
            document.getElementById('pentagone').style.display = 'none';
        }
        else if(nb == 2){
            document.getElementById('cercle').style.display = 'none';
            document.getElementById('impossible').style.display = '';
            document.getElementById('triangle').style.display = 'none';
            document.getElementById('quadrilatere').style.display = 'none';
            document.getElementById('pentagone').style.display = 'none';
        }
        else if(nb==3) {
            document.getElementById('cercle').style.display = 'none';
            document.getElementById('impossible').style.display = 'none';
            document.getElementById('triangle').style.display = '';
            document.getElementById('quadrilatere').style.display = 'none';
            document.getElementById('pentagone').style.display = 'none';
        }
        else if(nb==4) {
            document.getElementById('cercle').style.display = 'none';
            document.getElementById('impossible').style.display = 'none';
            document.getElementById('triangle').style.display = 'none';
            document.getElementById('quadrilatere').style.display = '';
            document.getElementById('pentagone').style.display = 'none';
        }
        else if(nb==5) {
            document.getElementById('triangle').style.display = 'none';
            document.getElementById('impossible').style.display = 'none';
            document.getElementById('quadrilatere').style.display = 'none';
            document.getElementById('pentagone').style.display = '';
        }

        document.getElementById("nb").value = "";
    }
</script>