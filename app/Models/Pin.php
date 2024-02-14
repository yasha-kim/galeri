<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pin extends Model
{
    use HasFactory;

    protected $fillable = [
        'path', 
        'judulfoto', 
        'deskripsifoto',
        'tglunggah',  
        'albums_id',
        'users_id'
    ];

    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
