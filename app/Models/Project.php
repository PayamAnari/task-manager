<?php

namespace App\Models;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }

    public function creator(): HasMany
    {
        return $this->belongsTo(User::class, 'creator_id');
    }
}
