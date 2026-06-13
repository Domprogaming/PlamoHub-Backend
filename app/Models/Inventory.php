<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $guarded = [];

    // Mengambil data Gunpla yang berelasi
    public function gunpla() {
        return $this->belongsTo(Gunpla::class);
    }
}