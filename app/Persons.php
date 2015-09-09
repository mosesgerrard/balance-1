<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Persons extends Model
{
    protected $table = 'persons';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'fullname', 'gender', 'nationalities', 'occupation', 'dob'];
    protected $dates = ['dob'];
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

//
//    public function getDobAttribute($date){
//       $this->attributes['dob'] = Carbon::createFromFormat('Y-m-d', $date);
//    }
}
