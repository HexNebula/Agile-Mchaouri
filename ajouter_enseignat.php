<?php
    require_once("../database.php");

    $com="insert into enseignat (nom,prenom ) values('".$_POST["nom"]."','".$_POST["prenom"]."')" ;

    $result=mysqli_query($db,$com);
    if($result&&$result2){
        echo "L'enseignat a ete ajoute avec succes!";
    }
    else{
        echo "On n'a pas pu ajouter l'etudiant";
    }
    mysqli_close($db);
?>
<div style="width: 90%;height: 55px;margin: 50px"><div style="margin: 0 auto;width: 90px;height: 30px;background-color: #117700"><a style="text-decoration: none;padding:3px;color: #f3f3f3;text-align: center;display: block" href="#" onclick="javascript:history.back(-1);">Retour</a></div> </div>
