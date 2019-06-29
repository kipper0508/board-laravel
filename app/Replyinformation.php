<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Replyinformation extends Model
{
    protected $table = 'messenge';
    public $timestamps= false;
    protected $fillable = [
        'content','usr','towho'
    ];
    
}
