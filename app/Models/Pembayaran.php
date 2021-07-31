<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayarans';
    protected $fillable = [
        'name',
        'phone',
        'pesanan_id',
        'payment_amount',
        'image',
        'status',
        'created_at',
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function pesanan()
    {
        return $this->belongsTo('App\Models\Pesanan');
    }
    public function job()
    {
        return $this->belongsTo('App\Models\Job');
    }
}
