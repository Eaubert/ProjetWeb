<?php
require '../Controller.php';
extract($_POST);
createCandidat($nom,  $prenom,  $mail,  $tel,  $tel_portable,  $adresse,  $ville,  $code_postal,  $date_naissance,  $id_adresse_ip,  $resultat);

?>