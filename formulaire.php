<?php include('header.php')?>
<?php if(isset($_POST)){

$to  = 'enzoabt@free.fr';

// Sujet
$subject = 'Calendrier des anniversaires pour Août';

// message
$message = '
<html>
 <head>
  <title>Calendrier des anniversaires pour Août</title>
 </head>
 <body>
  <p>Voici les anniversaires à venir au mois d\'Août !</p>
  <table>
   <tr>
    <th>Personne</th><th>Jour</th><th>Mois</th><th>Année</th>
   </tr>
   <tr>
    <td>Josiane</td><td>3</td><td>Août</td><td>1970</td>
   </tr>
   <tr>
    <td>Emma</td><td>26</td><td>Août</td><td>1973</td>
   </tr>
  </table>
 </body>
</html>
';

// Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// En-têtes additionnels
$headers[] = 'To: Mary <enzoabt@free.fr>';
$headers[] = 'From: Anniversaire <anniversaire@example.com>';
$headers[] = 'Cc: anniversaire_archive@example.com';
$headers[] = 'Bcc: anniversaire_verif@example.com';

// Envoi
mail($to, $subject, $message, implode("\r\n", $headers));
}
?>

<div class="container">
<h2>Formulaire d'inscription</h2>
<div class='row'>

<form method="POST" action="" >
  <div class="form-group row">
    <label for="Nom">Nom:</label>
    <input type="text" class="form-control" name="Nom" value="" required>
  </div>
  <div class="form-group row">
    <label for="Prénom">Prénom:</label>
    <input type="text" class="form-control" name="Prénom" value="" required>
  </div>
  <div class="form-group row">
    <label for="Date_naissance">Date de Naissance:</label>
    <input type="date" class="form-control" name="Date_naissance" placeholder="jj/mm/aaaa" required>
  </div>
  <div class="form-group row">
    <label for="Adresse">Adresse:</label>
    <input type="text" class="form-control" name="Adresse" value="" required>
  </div>
  <div class="form-group row">
    <label for="Ville">Ville:</label>
    <input type="text" class="form-control" name="Ville" value="" required>
  </div>
  <div class="form-group row">
    <label for="Code_postale">Code postale:</label>
    <input type="text" class="form-control" name="Code_postale" pattern="[0-9]{5}" placeholder="57500" value="" required>
  </div>
  <div class="form-group row">
    <label for="Telephone">Tél:</label>
    <input type="telNo" class="form-control" name="Telephone" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" placeholder="0101010101" required>
  </div>
  <div class="form-group row">
    <label for="Telephone_Portable:">Tél Portable:</label>
    <input type="text" class="form-control" name="Telephone_portable" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" placeholder="0101010101" required>
  </div>   <div class="form-group row">
  <div class="form-group row">
    <label for="email">Email :</label>
    <input type="email" class="form-control" id="email" name="Email" aria-describedby="emailHelp" placeholder="Entrer email" required>
  </div>
  <div class="form-group row">
</div>
<button type="submit" class="btn btn-primary">Envoyer</button>
</form>
</div>
</div>




<?php include('footer.php') ?>
