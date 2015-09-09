<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $primaryKey = 'id';
    protected $fillable = ['personId', 'address', 'phone', 'email'];

  

  	/**
  	 * [person description]
  	 * @return [type] [description]
  	 */
    public function person(){
        return $this->belongsTo('App\Persons', 'id','personId');
    }

    // scopes
}
