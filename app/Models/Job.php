<?php

namespace App\Models;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;
    
    public function tags()
    {
        return $this->belongsTomany(Tag::class);
    }
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
