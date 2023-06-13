<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'topic_id',
        'comment',
    ];

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

}
