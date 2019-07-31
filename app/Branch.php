<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
  public static $createRules = [
    'address' => 'required|max:300|min:8',
    'IFSC' => 'required|unique:branches|size:11'
  ];

  protected $fillable = [
    'address',
    'IFSC',
    'bank_id'
  ];
  public function bank()
  {
    return $this->belongsTo('App\Bank');
  }
}
