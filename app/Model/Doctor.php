<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model

{
   use HasFactory;

   public $timestamps = false;
   protected $fillable = [
       'full_name',
       'date_of_birth',
       'position_id',
       'specialization_id'
   ];
   public function position()
   {
       return $this->belongsTo(Position::class);
   }
   public function specialization()
   {
       return $this->belongsTo(Specialization::class);
   }
   public function record()
   {
       return $this->hasMany(Record::class);
   }
   
}