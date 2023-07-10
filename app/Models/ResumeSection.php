<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumeSection extends Model
{
    use HasFactory;

        // Resume templates associated with the resume section
        public function templates()
        {
            return $this->belongsToMany(ResumeTemplate::class);
        }
    
        // Users associated with the resume section
        public function users()
        {
            return $this->belongsToMany(User::class);
        }
    
        // Resume fields associated with the resume section
        public function fields()
        {
            return $this->hasMany(ResumeField::class);
        }

    
}
