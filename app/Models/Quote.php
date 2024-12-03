<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quote extends Model
{
    protected $guarded = [
        'id',
    ];

    use HasFactory;
    use softDeletes;

    public function author() {
        return $this->belongsTo(Author::class);
    }
}
