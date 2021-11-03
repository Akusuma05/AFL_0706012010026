<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Headphone extends Model
{
    use HasFactory;

    
    protected $table = 'headphone';
    protected $fillable = [
        'name_headphone', 
        'nama_brand', 
        'tahun', 
        'ANC', 
        'tipe_headphone', 
        'wireless', 
        'enclosure', 
        'mic', 
        'harga', 
        'rating', 
        'image_path_headphone',
        'created_at', 
        'updated_at'
    ];

    public function getbrand(){
        return $this->belongsTo(Brand::class, 'nama_brand', 'brand_code');
    }
}
