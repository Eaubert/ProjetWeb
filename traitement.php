<?php require 'Controller.php'; ?>
<style>
.msg{
  display: inline-block;
  padding : 20px;
  width : 300px;
  border : 1px #546563 solid;
  border-top : 3px #546563 solid;
  position: absolute;
  top : 100px;
  left : -300px;
  background: white;
  animation: popup 3s forwards;
}

@keyframes popup {
  3%{
    transform: translateX(310px);
  }
  90%{
    opacity: 1;
  }
  100%{
    opacity: 0;
    transform: translateX(310px);
  }
}

</style>
<?php

if(isset($_POST['reponse'])){
  $nbRep = count($_POST['reponse'][0]);
  if($nbRep == 1){
    $lastInsertIndex = end(unserialize($_COOKIE['index']));
    $result = verifReponse($lastInsertIndex, $_POST['reponse']);
    if($result[0]['juste'] == 0){
      echo '<span class="msg">Réponse précédente incorrect</span>';
    }else{
      echo '<span class="msg">Réponse précédente correct</span>';
    }
  }
  else{
    $tab = [];
    $reponseUser = [];
    $lastInsertIndex = end(unserialize($_COOKIE['index']));
    $donnees = verifMultiReponses($lastInsertIndex);
    foreach ($donnees as $key => $value) {
      array_push($tab,$value['texte']);
    }
    foreach ($_POST['reponse'][0] as $key => $value) {
      array_push($reponseUser,$value);
    }
    if(empty(array_diff($reponseUser,$tab))){
      echo '<span class="msg">Réponse précédente correct</span>';
    }else{
      echo '<span class="msg">Réponse précédente incorrect</span>';
    }
  }
}elseif(isset($_COOKIE['index'])){
  echo '<span class="msg">Réponse précédente non renseignée</span>';
}

if(isset($_COOKIE['index'])){
  $i = rand(1,10);
  $newtab = unserialize($_COOKIE['index']);
  $tours = count($newtab);
  if($tours != 6){
    while(in_array($i,$newtab)){
      echo 'tour';
      $i = rand(1,10);
    }
    array_push($newtab,$i);
    setcookie("index", serialize($newtab), time()+3600);
  }else{
    echo 'bonjour';
    setcookie('index', '', time() - 3600);
  }
}
else{
  $i = rand(1,10);
  $tab = [$i];
  setcookie("index", serialize($tab), time()+3600);
}

$donnees = getQuestion($i);

echo '<div id="form-question">
  <h4>'.$donnees[0]['question'].'</h4>'; ?>
  <form id='qf' data-type='<?= $donnees[0]['reponses'][0]['type']; ?>'>
<?php foreach($donnees[0]['reponses'] as $r){ ?>
    <?= $r['texte'] ?> <input type='<?= $r['type'] ?>' name="rep[]" value="<?= $r['texte'] ?>" /><br />
<?php } ?>
  </form>
    <div class="suivant" data-next='<?= $donnees[0]['id_question'] ?>'>
      SUIVANT
    </div>
</div>
