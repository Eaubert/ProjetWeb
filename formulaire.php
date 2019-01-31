<?php include('header.php')?>

<div class="container">
<h2>Formulaire d'inscription</h2>
<div class='row'>

<form method="POST" action="formulaire-bdd.php" >
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
