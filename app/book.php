<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{

    protected $fillable=['id','name', "description",'author','borrowed','roof_id','category_id','book_img','book_file'];

    public function student(){
        return $this->belongsTo('App\User','borrowed');
    }
}


