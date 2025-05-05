<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    // Menentukan nama tabel
    protected $table = 'reports';

    // Menentukan kolom yang dapat diisi
    protected $fillable = [
        'user_id',
        'type',
        'item_name',
        'description',
        'location',
        'date',
        'image',
        'status',
    ];

    // Relasi ke User (setiap laporan milik satu user)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Bisa ditambahkan relasi lain jika ada relasi lain ke tabel lain
}
