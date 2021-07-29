<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./Vue/css/contact.css">

        <title>Contact</title>
    </head>
  <body>

<div class="page">

  <div class="connexion">
      <h1>Contact</h1>

      <form action="index.php?controle=c_contact&action=envoiMail" method="post">

          <p>Adresse mail :</p>
          <input class="valueCo" type="mail" name="mail" placeholder="Votre email" required >

          <p>Objet :</p>
          <input class="valueCo" type="text" name="objet" placeholder="L'objet du mail" required >

          <p>Sujet :</p>
          <input class="sujet" type="text" name="sujet" placeholder="Sujet de votre mail" required >

          <input class="btnCo" type="submit" name="formConnexion" value="Envoyer un mail">


      </form>

  </div>
</div>