<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model 

{
   use HasFactory;

   public $timestamps = false;
   protected $fillable = [
    'causes',
    'date',
    'cabinet'
];
   
   public function record()
   {
       return $this->hasMany(Record::class);
   }
}