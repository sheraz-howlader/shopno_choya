<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $guarded = ['id'];

    use HasFactory;
    
    public function module()
    {
       return $this->belongsTo(Module::class);
    }

    public function roles()
    {
       return $this->belongsToMany(Role::class);
    }
}
