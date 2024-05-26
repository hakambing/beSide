<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    // public function task(): BelongsTo
    // {
    //     return $this->belongsTo(Task::class);
    // }
    public function tasks()
    {
        return $this->belongsToMany(Task::class, 'category_task'); // Explicit pivot table name
    }

}
