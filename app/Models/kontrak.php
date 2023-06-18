<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kontrak extends Model
{
    protected $guard = 'kontrak';

    use HasFactory;

    protected $fillable = [
        'user_id',
        'pekerja_id',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pekerja()
    {
        return $this->belongsTo(Pekerja::class);
    }

    public function isPaid()
    {
        return $this->is_paid;
    }
}
