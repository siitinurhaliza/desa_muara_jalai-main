<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DataKematian extends Model
{
  
    use SoftDeletes;

   public $table = 'data_kematians';
   
   protected $dates = [ 'created_at','updated_at', 'deleted_at'
];

protected $fillable = [
   'nama',
   'nik',
   'tgl_lahir',
   'tgl_mati',
   'penyebab',
    'created_at',
    'updated_at',
    'deleted_at'
];
}
