<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Satuan;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode',
        'nama',
        'harga',
        'deskripsi',
        'satuan',
    ];

    public function Satuan()
    {
        return $this->belongsTo(Satuan::class);
    }
}
