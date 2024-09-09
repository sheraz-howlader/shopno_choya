<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    protected $guarded = ['id'];

    public function permissions(): BelongsToMany
    {
       return $this->belongsToMany(Permission::class);
    }

    public function users(): HasMany
    {
       return $this->hasMany(User::class);
    }

    //this scope provide all roles without developer
    public function scopeRoles($query)
    {
        return auth()->user()->role_id === 1 ? $query->get() : $query->whereNotIn('id', [1])->get();
    }
}
