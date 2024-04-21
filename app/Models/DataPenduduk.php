<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DataPenduduk extends Model
{
   // use HasFactory;
   use SoftDeletes;

   public $table = 'data_penduduks';
   
   protected $dates = [ 'created_at','updated_at', 'deleted_at'
];

protected $fillable = [
    'nama',
    'NIK',
    'Tanggal_Lahir',
    'Alamat',
    'No_Hp',
    'created_at',
    'updated_at',
    'deleted_at'
];
}
