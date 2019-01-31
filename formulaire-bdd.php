<?php
require 'Controller.php';
createCandidat($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['tel'], 
$_POST['tel_portable'], $_POST['adresse'], $_POST['ville'], $_POST['code_postal'], 
$_POST['date_naissance'], $_POST['id_adresse_ip'], $_POST['resultat']);

?>