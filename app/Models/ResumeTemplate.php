<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumeTemplate extends Model
{
    use HasFactory;



      // Users associated with the resume template
      public function users()
      {
          return $this->belongsToMany(User::class);
      }
  
      // Resume sections associated with the resume template
      public function sections()
      {
          return $this->hasMany(ResumeSection::class);
      }
}
