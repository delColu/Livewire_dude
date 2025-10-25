<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class PostModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'is_archived',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
