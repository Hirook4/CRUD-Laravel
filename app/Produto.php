<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['nome', 'quantidade', 'preco'];
    protected $hidden = ['id', 'created_ad', 'updated_at'];
    protected $table = 'produtos';
}
