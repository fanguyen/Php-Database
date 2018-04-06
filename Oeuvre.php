<?php

    // Connexion PDO
    $pdo = include('fichierconnexion.php');
    $sql= 'Select o.titre_oeuvre, o.annee from composer c inner join oeuvre o on o.code_oeuvre=c.code_oeuvre where c.code_musicien= :code order by o.annee desc';
    $requete = $pdo->prepare($sql);
    $requete->execute(['code' => $_GET['code']]);


    echo "<table>";

    echo "<th>Titre</th>";
    echo "<th>Année</th>";

    foreach ($requete->fetchAll() as $row) {

        echo '<tr>';
        echo '<td>' . $row['titre_oeuvre']. "</td>";
        echo '<td>' . $row['annee']. "</td>";
        echo '</tr>';

    }
    echo "</table>";

    $pdo = null;
?>
