<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriTipe extends Model
{
    use HasFactory;
    protected $table = 'kategori_tipes';
    protected $guarded = [ ];
   public function sluggable()
   {
       return [
           'slug' => [
               'source' => 'title'
           ]
       ];
   }
   
   public function portofolio()
   {
       return $this->belongsTo('App\Models\Portofolio');
   }
   public function pesanan()
   {
       return $this->belongsTo('App\Models\Pesanan');
   }
   public function model()
   {
       return $this->hasMany('App\Models\Model');
   }
}
