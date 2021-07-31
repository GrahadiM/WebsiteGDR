<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $table = 'pesanans';
    protected $fillable = [
        'user_id',
        'tipe_id',
        'model_id',
        'job_id',
        'building_area',
        'building_length',
        'building_width',
        'package_type',
        'price_package',
        'address',
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function job()
    {
        return $this->belongsTo('App\Models\Job');
    }
    public function pembayaran()
    {
        return $this->belongsTo('App\Models\Pembayaran');
    }
    public function progres()
    {
        return $this->belongsTo('App\Models\Progres');
    }
    public function tipe()
    {
        return $this->belongsTo('App\Models\KategoriTipe');
    }
    public function model()
    {
        return $this->belongsTo('App\Models\KategoriModel');
    }
}
