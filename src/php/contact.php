<?php

    $name = addslashes($_POST['yourName']);
    $surname = addslashes($_POST['yourSurname']);
    $email = addslashes($_POST['yourEmail']);
    $company = addslashes($_POST['companyName']);
    $telephone = addslashes($_POST['telephone']);
    $activity = addslashes($_POST['activity']);
    $message = addslashes($_POST['message']);

    $to = "#";
    $subject = "Contact Site";

    $body = "Nom: ".$surname."\n"."Prénom: ".$name."\n"."E-mail: ".$email."\n"."Nom de l'Entreprise: ".$company."\n"."Téléphone: ".$telephone."\n"."Activité: ".$activity."\n"."Message: ".$message;
    
    $header = "From: #"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($to,$subject,$body,$header)){
        echo("Votre e-mail a été envoyé avec succès!");
    }else{
        echo("Un error a été produit.");
    }

?>