<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PermissionModule extends Model
{
    protected $guarded = ['id'];

    public function permissions(): HasMany
    {
       return $this->hasMany(Permission::class, 'module_id');
    }
}
