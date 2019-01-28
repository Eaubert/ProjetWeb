<?php include('header.php')?>

<div class="container">
<h2>Formulaire d'inscription</h2>
<div class='row'>

<form>
  <div class="form-group row">
    <label for="Nom">Nom:</label>
    <input type="text" class="form-control" name="Nom" value="">
  </div>
  <div class="form-group row">
    <label for="Prénom">Prénom:</label>
    <input type="text" class="form-control" name="Prénom" value="">
  </div>
  <div class="form-group row">
    <label for="Date_naissance">Date de Naissance:</label>
    <input type="date" class="form-control" name="Date_naissance" placeholder="jj/mm/aaaa">
  </div>
  <div class="form-group row">
    <label for="Adresse">Adresse:</label>
    <input type="text" class="form-control" name="Adresse" value="">
  </div>
  <div class="form-group row">
    <label for="Ville">Ville:</label>
    <input type="text" class="form-control" name="Ville" value="">
  </div>
  <div class="form-group row">
    <label for="Code_postale">Code postale:</label>
    <input type="text" class="form-control" name="Code_postale" value="">
  </div>
  <div class="form-group row">
    <label for="Telephone">Tél:</label>
    <input type="text" class="form-control" name="Telephone" value="">
  </div>
  <div class="form-group row">
    <label for="Telephone_Portable:">Tél Portable:</label>
    <input type="text" class="form-control" name="Telephone_portable" value="">
  </div>   <div class="form-group row">
  <div class="form-group row">
    <label for="email">Email :</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Entrer email">
  </div>
  <div class="form-group row">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>
</div>





<?php include('footer.php') ?>
