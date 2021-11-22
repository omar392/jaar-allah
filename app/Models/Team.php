<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = ['name_ar','name_en','job_ar','job_en','image','status'];
    
    public function getNameAttribute()
    {
        if (app()->getLocale() == 'ar') {
            return $this->name_ar;
        }
        return $this->name_en;
    }
    public function getJobAttribute()
    {
        if (app()->getLocale() == 'ar') {
            return $this->job_ar;
        }
        return $this->job_en;
    }
}
