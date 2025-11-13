<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WifiNetwork extends Model
{
    protected $fillable = [
        'ssid', 'bssid', 'ip_address', 'gateway', 'interface_name'
    ];

    public function tests()
    {
        return $this->hasMany(NetworkTest::class, 'wifi_id');
    }
}
