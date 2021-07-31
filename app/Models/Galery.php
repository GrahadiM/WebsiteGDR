<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    use HasFactory;
    protected $table = 'galeries';
    protected $fillable = ['name'];
    public function portofolio()
    {
        return $this->belongsTo('App\Models\Portofolio');
    }
}
