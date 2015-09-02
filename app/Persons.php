<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persons extends Model
{
    protected $table = 'persons';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'fullname', 'gender', 'nationalities', 'occupation', 'dob'];

    public function member(){
        return $this->belongsTo('App\Member', 'id','personId');
    }

    public function contacts(){
        return $this->hasOne('App\Contact','personId', 'id');
    }

    public function files(){
        return $this->hasMany('App\File', 'personId', 'id');
    }

    public function education(){
        return $this->hasMany('App\Education','personId', 'id');
    }
}
