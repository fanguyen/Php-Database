<?php

    // Connexion PDO
    $pdo = include('fichierconnexion.php');
    $sql = 'Select distinct m.code_musicien, m.Nom_Musicien, m.Prenom_Musicien from Musicien m inner join composer c on c.code_musicien=m.code_musicien WHERE Nom_Musicien Like :nom';
    $requete = $pdo->prepare($sql);
    $requete->execute(['nom' => 'B%']);

    echo "<table>";

    echo "<th>Nom</th>";
    echo "<th>Prénom</th>";

    foreach ($requete->fetchAll() as $row) {

        $code = $row['code_musicien'];
        echo '<tr>';
        echo '<td><a href="Oeuvre.php?code='.$code.'">'. $row['Nom_Musicien']."<a/></td>";
        echo '<td>' . $row['Prenom_Musicien']. "</td>";
        echo '</tr>';

    }
    echo "</table>";

    $pdo = null;
?>
