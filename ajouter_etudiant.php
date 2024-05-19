
<?php

    require_once "database.php";
    $stmt = $conn->prepare("INSERT INTO etudiant (matricule, nom, prenom) VALUES (?, ?, ?)");
    $stmt->bind_param("iss", $_POST["matricule"], $_POST["nom"], $_POST["prenom"]);

   // Execute the statement
$stmt->execute();

// Check if the query was successful
if ($stmt->affected_rows > 0) {
    echo "L'étudiant a été ajouté avec succès!";
} else {
    echo "On n'a pas pu ajouter l'étudiant";
}

// Close the statement
$stmt->close();
?>
