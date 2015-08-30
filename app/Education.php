<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = 'education';
    protected $primaryKey = 'id';
    protected $fillable = ['personId', 'school', 'schType', 'year'];

    //relationships

    public function person(){
        return $this->belongsTo('App\Persons', 'id','personId');
    }


    //scopes
}
