<?php

namespace Produtos;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['user_id', 'text'];

    public function user(){
        return $this->belongsTo('\Chat\User');
     }

     public function messages(){
        return $this->hasMany('\Chat\Message');
     }
          
}
