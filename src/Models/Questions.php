<?php

namespace inscription\Models;

class Questions extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'questions';
    protected $primaryKey = 'id_question';
    public $timestamps = false;

    public function reponses(){
      return $this->hasMany('inscription\Models\Reponses','id_question');
    }
}

?>
