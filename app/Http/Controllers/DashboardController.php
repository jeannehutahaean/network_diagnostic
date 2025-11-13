<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WifiNetwork;
use App\Models\NetworkTest;
use App\Models\ActivityLog;

class DashboardController extends Controller
{
    /**
     * Tampilkan halaman dashboard utama.
     */
    public function index()
    {
        // Ambil data ringkasan
        $totalWifi = WifiNetwork::count();
        $totalTests = NetworkTest::count();
        $avgDownload = NetworkTest::avg('download_speed');
        $avgUpload = NetworkTest::avg('upload_speed');
        $avgPing = NetworkTest::avg('ping');

        // Data untuk grafik kecepatan Wi-Fi
        $chartData = NetworkTest::selectRaw('wifi_networks.ssid as ssid, AVG(network_tests.download_speed) as avg_download, AVG(network_tests.upload_speed) as avg_upload')
            ->join('wifi_networks', 'wifi_networks.id', '=', 'network_tests.wifi_id')
            ->groupBy('wifi_networks.ssid')
            ->orderBy('wifi_networks.ssid', 'asc')
            ->get();

        // Kirim data ke view
        return view('dashboard', compact(
            'totalWifi',
            'totalTests',
            'avgDownload',
            'avgUpload',
            'avgPing',
            'chartData'
        ));
    }

    /**
     * Menampilkan halaman log aktivitas sistem.
     */
    public function logs()
    {
        $logs = ActivityLog::orderBy('created_at', 'desc')->paginate(15);

        return view('network.logs', compact('logs'));
    }
}
