<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks'; // Specify your table name if not the default

    protected $fillable = [
        'title',
        'description',
        'deadline',
        'is_complete'
    ];

    protected $casts = [
        'deadline' => 'datetime',  // This casts the deadline to a Carbon instance
    ];
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function reponses(): HasMany
    {
        return $this->hasMany(TaskResponse::class);
    }
}
