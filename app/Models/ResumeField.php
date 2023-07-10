<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumeField extends Model
{
    use HasFactory;


        // Resume sections associated with the resume field
        public function sections()
        {
            return $this->belongsToMany(ResumeSection::class);
        }
    
        // Users associated with the resume field
        public function users()
        {
            return $this->belongsToMany(User::class);
        }
}
