<?php

namespace inscription\Models;

class Reponses extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'reponses';
    protected $primaryKey = 'id_reponse';
    public $timestamps = false;

    public function question(){
       return $this->belongsTo('inscription\Models\Question','id_question');
   }
}

?>
