<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name
    protected $table = 'posts';

    //Primary Key
    public $primaryKey = 'id';

    //TImestamps
    public $timestamps = true;

    //Function to return only the present user's blog post
    public function user(){
    	return $this->belongsTo('App\User');
    }
}
