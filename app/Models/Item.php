<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'price',
        'description',
        'resto',
    ];

    public function categories(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category');
    }

    public function restos(): BelongsTo
    {
        return $this->belongsTo(Resto::class, 'resto');
    }
}
