<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriModel extends Model
{
    use HasFactory;
    protected $table = 'kategori_models';
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
   public function tipe()
   {
       return $this->belongsTo('App\Models\KategoriTipe');
   }
}
