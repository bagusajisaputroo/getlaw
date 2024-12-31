<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = ['name'];

    public function books() {
        return $this->hasMany(Books::class);
    }

    
    public function news() {
        return $this->hasMany(News::class);
    }
    
    public function lembagas() {
        return $this->hasMany(Lembaga::class);
    }

    //
}
