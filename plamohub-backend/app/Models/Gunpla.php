<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gunpla extends Model
{
    use HasFactory;

    // Ini memberi tahu Laravel kolom apa saja yang boleh diisi oleh Seeder
    protected $fillable = [
        'name',
        'grade',
        'scale',
        'price',
        'desc',
        'imageColor',
        'series',
        'image',
    ];
}