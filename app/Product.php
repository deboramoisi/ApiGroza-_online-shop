<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	// introducerea listei de campuri pe care le are tabela
    public $fillable = ['id', 'name', 'category', 'quantity', 'gramaj', 'description', 'prop_car', 'image', 'price'];
}
