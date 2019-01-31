<?php

require './vendor/autoload.php';
use inscription\Models\Questions;
use inscription\Models\Reponses;
use inscription\Models\Candidat;

//Connexion
 $config = [
       'driver'    => 'mysql',
       'host'      => 'localhost',
       'database'  => 'inscription',
       'username'  => 'root',
       'charset'   => 'utf8',
       'collation' => 'utf8_unicode_ci',
       'password'  => 'root',
       'prefix'    => ''
     ];
 $db = new Illuminate\Database\Capsule\Manager();
 $db->addConnection(  $config );
 $db->setAsGlobal();
 $db->bootEloquent();

function getQuestion( $index){
  return Questions::where('id_question', '=',  $index)
  ->with('reponses')
  ->get();
}

function verifReponse( $id, $rep){
  return Reponses::select('juste')
  ->where([['id_question', '=',  $id],['texte','=', $rep]])
  ->get();
}

function verifMultiReponses( $id){
  return Reponses::select('texte')
  ->where([['id_question','=', $id],['juste','=',1]])
  ->get();
}


function createCandidat( $nom,  $prenom,  $mail,  $tel,  $tel_portable,  $adresse,  $ville,  $code_postal,  $date_naissance,  $id_adresse_ip,  $resultat){
 $candidat = new Candidat;
 $candidat->nom =  $nom;
 $candidat->prenom =  $prenom;
 $candidat->mail =  $mail;
 $candidat->tel =  $tel;
 $candidat->tel_portable =  $tel_portable;
 $candidat->adresse =  $adresse;
 $candidat->ville =  $ville;
 $candidat->code_postal =  $code_postal;
 $candidat->date_naissance =  $date_naissance;
 $candidat->id_adresse_ip =  $id_adresse_ip;
 $candidat->resultat =  $resultat;
 $candidat->save();
}
?>
