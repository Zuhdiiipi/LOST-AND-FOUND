<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Report extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable = [
        'user_id',
        'item_id',
        'lokasi',
        'tanggal',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function claim()
    {
        return $this->hasOne(Claim::class);
    }
}
