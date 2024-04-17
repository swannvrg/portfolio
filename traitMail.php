<?php
/* recup des données du form */
 $nom = $_POST['nom'];
 $mail = $_POST['mail'];
 $objet = $_POST[ 'objet'];
 $message = $_POST[ 'message']; 
/* insertion de mon mail dans une variable */
 $destinataire = "swannvrg@gmail.com";
// Construire le corps du message
$contenu = "Nom: $nom\n";
$contenu .= "Email: $mail\n";
$contenu .= "Objet: $objet\n";
$contenu .= "Message: $message\n";

// Envoi de l'e-mail
$sujet = "Nouveau message de votre portfolio";
$headers = "De : $nom <$mail>";

// Utilisez la fonction mail() pour envoyer l'e-mail
/* mail($destinataire, $sujet, $contenu, $headers); */



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../portfolio/design.css">
    <title>Envoie réussi</title>
</head>
<body >
    <!-- <?php
        if(mail($destinataire, $sujet, $contenu, $headers)){
            ?>
            <h1>L'envoie de votre message a été réalisé avec succés !</h1>
            <h3>Vous serez redirigé dans quelques secondes sur mon portfollio, sinon cliqué <a href="../portfolio/index.html">ici</a></h3>
            <?php
        }
    ?> -->

    <h1>Envoie seulement possible quand mon portfollio sera hebergé</h1>
    <h3>Vous serez redirigé dans quelques secondes sur mon portfollio, sinon cliquez <a href="../portfolio/index.html">ici</a></h3>
    <?php
    header("refresh:2;url=index.html");
    exit();
    ?>

</body>
</html>