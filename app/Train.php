<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $table = 'trains';

    public function getData(){
        return date('d/m/Y H:i', strtotime($this->orario_di_partenza));
    }
}
