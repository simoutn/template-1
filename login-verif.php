<?php
include "connect.php";session_start(); // à mettre tout en haut du fichier .php, cette fonction propre à PHP servira à maintenir la $_SESSION
if(isset($_POST['connexion'])) { // si le bouton "Connexion" est appuyé
    // on vérifie que le champ "username" n'est pas vide
    // empty vérifie à la fois si le champ est vide et si le champ existe belle et bien (is set)
    if(empty($_POST['username'])) {
        echo "Le champ username est vide.";
    } else {
        // on vérifie maintenant si le champ "Mot de passe" n'est pas vide"
        if(empty($_POST['password'])) {
            echo "Le champ Mot de passe est vide.";
        } else {
            
            // les champs sont bien posté et pas vide, on sécurise les données entrées par le membre:
            $username = htmlentities($_POST['username'], ENT_QUOTES, "ISO-8859-1"); // le htmlentities() passera les guillemets en entités HTML, ce qui empêchera les injections SQL
            $password = htmlentities($_POST['password'], ENT_QUOTES, "ISO-8859-1");
            // on fait maintenant la requête dans la base de données pour rechercher si ces données existe et correspondent:
$Requete = "SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."'";//si vous avez enregistré le mot de passe en md5() il vous suffira de faire la vérification en mettant mdp = '".md5($MotDePasse)."' au lieu de mdp = '".$MotDePasse."'
                $result = $conn->query($Requete);
                if ($result->num_rows > 0) {
                    header("Location: dashbord.php");
                }
                else
                {
                    header("Location: register.php");
                }
            
            }
    
    }
}
      ?>