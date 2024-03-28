<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model 

{
   use HasFactory;

   public $timestamps = false;

   public function doctor()
   {
       return $this->hasMany(Doctor::class);
   }

   public function record()
   {
       return $this->hasMany(Record::class);
   }
}