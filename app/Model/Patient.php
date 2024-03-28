<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model 

{
   use HasFactory;

   public $timestamps = false;
   protected $fillable = [
       'full_name',
       'date_of_birth'
   ];
   public function record()
   {
       return $this->hasMany(Record::class);
   }
}