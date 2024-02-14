<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Album extends Model
{
    use HasFactory;

    protected $fillable = ['nama_album', 'deskripsi', 'users_id'];

    public function pins()
    {
        return $this->hasMany(Pin::class);
    }
}
