<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $primaryKey = 'brand_code';
    protected $keyType = 'string';
    protected $table = 'brand';
    protected $fillable = [
        'brand_code', 
        'nama', 
        'asal', 
        'image_path_brand',
        'created_at', 
        'updated_at'
    ];

    public function getheadphone(){
        return $this->hasMany(Headphone::class, 'nama_brand', 'brand_code');
    }
}
