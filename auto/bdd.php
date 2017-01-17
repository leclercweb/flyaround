


<?php
    if(isset($_GET['query'])) {
        $q = htmlentities($_GET['query']);
 try
{
    $bdd = new PDO('mysql:host=localhost;dbname=site;charset=utf8', 'root', 'ran666x');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
        
}

        $requete = "SELECT nom_fr_fr FROM pays WHERE nom_fr_fr LIKE '". $q ."%' LIMIT 0, 10";
         $resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));
         while($donnees = $resultat->fetch(PDO::FETCH_ASSOC)) {
            $suggestions['suggestions'][] = $donnees['nom_fr_fr'];
        }
         echo json_encode($suggestions);
    }
?>