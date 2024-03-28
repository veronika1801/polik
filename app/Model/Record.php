<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model 

{
   use HasFactory;

   public $timestamps = false;
   protected $fillable = [
       'doctor_id',
       'patient_id',
       'information_id'
   ];
   public function doctor()
   {
       return $this->belongsTo(Doctor::class);
   }
   public function patient()
   {
       return $this->belongsTo(Patient::class);
   }
   public function information()
   {
       return $this->belongsTo(Information::class);
   }
}