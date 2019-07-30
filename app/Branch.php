<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
  public static $createRules = [
    'address' => 'required|max:300|min:10',
    'IFSC' => 'required|size:11'
  ];

  protected $fillable = [
    'address',
    'IFSC'
  ];
  public function bank()
  {
    return $this->belongsTo('App\Branch');
  }
}
