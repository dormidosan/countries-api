<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 */
class AccessLog extends Model
{
    use HasFactory;
    protected $fillable = [
        'ip_address', 'resource'
    ];
}
