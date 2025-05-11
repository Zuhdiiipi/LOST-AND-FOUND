<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'item_id',
        'lokasi',
        'tanggal',
        'status',
    ];

    /**
     * Relasi ke model User.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relasi ke model Item.
     */
    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    /**
     * Relasi ke model Claim (jika satu report bisa punya satu klaim).
     * Jika satu report bisa punya banyak klaim, ubah menjadi hasMany.
     */
    public function claim()
    {
        return $this->hasOne(Claim::class);
    }
}
