<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;     

    protected $fillable = [
        'judul', 
        'status', 
        'isi_berita', 
        'category_id', 
        'gambar'
    ]; 

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Mutator untuk hanya menyimpan nama file
    public function setGambarAttribute($value)
    {
        $this->attributes['gambar'] = basename($value); // Simpan hanya nama file
    }

    // Accessor untuk mendapatkan URL gambar lengkap
    public function getGambarUrlAttribute()
    {
        return asset('storage/news/' . $this->gambar); // URL lengkap gambar
    }
}
