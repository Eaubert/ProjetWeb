<?php

require './vendor/autoload.php';
use inscription\Models\Questions;
use inscription\Models\Reponses;

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
$db->addConnection( $config );
$db->setAsGlobal();
$db->bootEloquent();

function getQuestion($index){
  return Questions::where('id_question', '=', $index)
  ->with('reponses')
  ->get();
}

function verifReponse($id,$rep){
  return Reponses::select('juste')
  ->where([['id_question', '=', $id],['texte','=',$rep]])
  ->get();
}

function verifMultiReponses($id){
  return Reponses::select('texte')
  ->where([['id_question','=',$id],['juste','=',1]])
  ->get();
}
?>
