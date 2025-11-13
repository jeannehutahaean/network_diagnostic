<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NetworkTest extends Model
{
    protected $fillable = [
        'wifi_id', 'ping', 'download_speed', 'upload_speed', 'latency',
        'server_tested', 'result_json', 'tested_at'
    ];

    protected $casts = [
        'result_json' => 'array',
        'tested_at' => 'datetime'
    ];

    public function wifi()
    {
        return $this->belongsTo(WifiNetwork::class, 'wifi_id');
    }
}
