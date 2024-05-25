<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TaskResponse extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
        'did_issuer_review',
        'did_helper_review'
    ];

    public function task(): BelongsTo
    {
        return $this->belongsTo(Task::class);
    }

    public function helper(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
