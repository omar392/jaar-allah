<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Short extends Model
{
    use HasFactory;
    protected $fillable = ['new_ar','new_en','status'];
    public function getNewAttribute()
    {
        if (app()->getLocale() == 'ar') {
            return $this->new_ar;
        }
        return $this->new_en;
    }
}
