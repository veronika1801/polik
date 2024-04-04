<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model 

{
   use HasFactory;

   public $timestamps = false;
   protected $fillable = [
       'count',
       'representative',
       'route_one',
       'route_two'
   ];

}