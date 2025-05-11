<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_barang',
        'warna',
        'ciri_khusus',
        'foto',
        'type',
    ];

    /**
     * Relasi ke model Report (satu item bisa dimiliki oleh banyak report).
     */
    public function reports()
    {
        return $this->hasMany(Report::class);
    }
}
