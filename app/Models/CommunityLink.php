<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommunityLink extends Model
{
    protected $fillable = [
        'user_id', 'channel_id', 'title', 'link', 'approved'
    ];
    use HasFactory;
    
    public function creator()
    {
    return $this->belongsTo(User::class, 'user_id');
    }
}
