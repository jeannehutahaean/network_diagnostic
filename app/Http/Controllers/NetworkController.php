<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NetworkController extends Controller
{
    public function index()
    {
        return view('network.index');
    }

    public function getIpInfo()
    {
        $publicIp = file_get_contents('https://api.ipify.org');
        $localIp = getHostByName(getHostName());

        return response()->json([
            'local_ip' => $localIp,
            'public_ip' => $publicIp,
        ]);
    }

    public function pingTest(Request $request)
    {
        $host = $request->input('host', 'google.com');
        $os = PHP_OS_FAMILY;

        if ($os === 'Windows') {
            $ping = shell_exec("ping -n 4 " . escapeshellarg($host));
        } else {
            $ping = shell_exec("ping -c 4 " . escapeshellarg($host));
        }

        return response()->json([
            'host' => $host,
            'result' => $ping ?? 'Ping gagal dijalankan.'
        ]);
    }

    public function speedTest()
    {
        $output = shell_exec('speedtest-cli --simple 2>&1');
        return response()->json([
            'speedtest' => $output ?? 'Speedtest gagal dijalankan. Pastikan speedtest-cli terinstal di server.'
        ]);
    }
}
