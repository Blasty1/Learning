<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assign extends Model
{
    public function completed(){
    	#modifichiamo il valore nel campo completed con true
    	$this->completed=false;
		$this->save();
    }
}
