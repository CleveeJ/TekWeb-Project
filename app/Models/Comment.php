<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'user_id',
        'recipe_id',
        'comment',
        'rating',
    ];

    protected $hidden = [
        'updated_at',
    ];

    //Accessor
    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('M d, Y'); // Format the created_at date
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function recipe()
    {
        return $this->belongsTo(Recipe::class, 'recipe_id', 'id');
    }
}
