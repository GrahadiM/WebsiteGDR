<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;
    protected $table = 'portofolios';
    protected $fillable = [
        'title',
        'user_id',
        'model_id',
        'job_id',
        'image_id',
        'thumbnail',
        'building_area',
        'building_length',
        'building_width',
        'desc',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function tipe()
    {
        return $this->belongsTo(KategoriTipe::class);
    }
    public function model()
    {
        return $this->belongsTo(KategoriModel::class);
    }
    public function job()
    {
        return $this->belongsTo(Job::class);
    }
    public function galery()
    {
        return $this->hasMany(Galery::class);
    }
}
