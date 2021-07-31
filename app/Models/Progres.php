<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progres extends Model
{
    use HasFactory;
    protected $table = 'progres';
    protected $fillable = ([
        'title',
        'user_id',
        'pesanan_id',
        'job_id',
        'image',
        'file',
        'status',
        'desc',
    ]);
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
