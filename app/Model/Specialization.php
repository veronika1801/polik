<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialization extends Model 

{
   use HasFactory;

   public $timestamps = false;

   public function doctor()
   {
       return $this->hasMany(Doctor::class);
   }
}