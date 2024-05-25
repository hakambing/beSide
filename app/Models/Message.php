<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'is_seen'
    ];

    public function chat(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_1_id');
    }

    public function sender(): HasOne
    {
        return $this->hasOne(User::class, 'sender_id');
    }

    public function reciever(): HasOne
    {
        return $this->hasOne(User::class, 'reciever_id');
    }
}
