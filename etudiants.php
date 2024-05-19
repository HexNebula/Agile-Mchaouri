<?php
    require 'database.php';
    if(isset($_POST['submit'])){
        $matricule = $_POST["matricule"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];

        $query = "INSERT INTO etudiant (matricule, nom, prenom) VALUES ('$matricule', '$nom', '$prenom')";
        mysqli_query($conn,$query);
        echo
        "
        <script> alert('Data Inserted Successfully'); </script>
        ";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Etudiants</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        .buttonbox {
            display: flex;
            flex-direction: row-reverse;
            margin-bottom: 500px;
        }
        .boxes {
            display: flex;
            gap: 10px;
            grid-column: -1;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Etudiants</h1>
    <form action="etudiants.php" method="POST">
        <div class="boxes">
            <div class="col-md-4">
                <label for="matricule">Matricule:</label>
                <input type="text" id="matricule" name="matricule" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for="prenom">Prenom:</label>
                <input type="text" id="prenom" name="prenom" class="form-control" required>
            </div>
        </div>
        <div class="buttonbox">
            <input type="submit" name="submit" value="Enregistrer" class="btn btn-primary">
        </div>
    </form>
</div>

</body>
</html>
