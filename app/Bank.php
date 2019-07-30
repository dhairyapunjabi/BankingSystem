<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    public static $createRules = [
        'name' => 'required|unique:banks|max:255|min:3',
    ];

    protected $fillable = [
      'name'
    ];
}
