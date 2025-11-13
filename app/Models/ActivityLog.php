<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    protected $fillable = [
        'action_type', 'description', 'ip_address'
    ];

    public $timestamps = ['created_at'];
    public $updated_at = false;
}
