<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Recipe extends Model
{
    use HasFactory, SoftDeletes, HasUuids;

    protected $table = 'recipes';
    protected $primaryKey = 'id'; // Specify the primary key field
    protected $keyType = 'string'; // The key type is string (UUID)
    public $incrementing = false; // UUIDs are not auto-incrementing

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'ingredients',
        'procedures',
        'food_image',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // Enable soft deletes
    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class, 'recipe_id', 'id');
    }
}
