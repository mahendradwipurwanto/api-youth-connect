<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccessUser extends Model
{
    use HasFactory;

    protected $table = 'access_user';
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'user_id',
        'name',
        'picture',
        'gender',
        'phone',
        'institusion',
        'instagram',
        'tiktok',
    ];
    public $timestamps = false; // Disable the default timestamps for this model
    // Other methods and relationships as needed
}
