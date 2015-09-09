<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';
    protected $primaryKey = 'id';
    protected $fillable = ['personId', 'membershipDate', 'skills', 'remarks', 'status'];


    // relationshps

    public function person(){
      return $this->hasOne('App\Persons', 'id','personId');
    }

    //scopes

    public function scopeApproved($query){
       return $query->whereStatus(1);
    }

    public function scopeUnapproved($query){
        return $query->whereStatus(0);
    }
    // mutigators



}
