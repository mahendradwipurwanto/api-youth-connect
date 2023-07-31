<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccessRole extends Model
{
    use HasFactory;

    protected $table = 'access_roles';
    protected $primaryKey = 'id';
    protected $fillable = [
        'parent_id',
        'role',
        'weight',
        'access',
        'default',
    ];

    // Other methods and relationships as needed
}
