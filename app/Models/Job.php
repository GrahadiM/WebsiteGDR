<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $table = 'jobs';
    protected $fillable = ['name'];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function portofolio()
    {
        return $this->belongsTo('App\Models\Portofolio');
    }
    public function pesanan()
    {
        return $this->belongsTo('App\Models\Pesanan');
    }
    public function pembayaran()
    {
        return $this->belongsTo('App\Models\Pembayaran');
    }
}
