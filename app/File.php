<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = 'files';
    protected $primaryKey = 'id';
    protected $fillable = ['personId', 'fileOriginalName', 'renameFile', 'directory'];

    //relationships

    public function person(){
        return $this->belongsTo('App\Persons', 'id', 'personId');
    }
    //scopes
}
