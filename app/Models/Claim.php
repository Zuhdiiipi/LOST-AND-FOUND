<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    use HasFactory;

    // Menentukan nama tabel
    protected $table = 'claims';

    // Menentukan kolom yang dapat diisi
    protected $fillable = [
        'user_id',
        'report_id',
        'justification',
        'status',
    ];

    // Relasi ke User (setiap klaim milik satu user)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke Report (setiap klaim terkait dengan satu laporan)
    public function report()
    {
        return $this->belongsTo(Report::class);
    }
}
