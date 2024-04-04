<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model 

{
   use HasFactory;

   public $timestamps = false;
   protected $fillable = [
       'user_id',
       'title',
       'image',
       'description',
       'date',
       'subject',
       'status_id'
   ];
   public function status()
   {
       return $this->belongsTo(Status::class);
   }

   public function user()
   {
       return $this->belongsTo(User::class);
   }
}