@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto mt-10 bg-white p-6 rounded-2xl shadow-lg">
    <h1 class="text-2xl font-semibold text-center mb-6">Network Diagnostic Tool (UBP IT Support)</h1>

    <div class="space-y-4">
        <button onclick="getIP()" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Cek IP Address</button>
        <p id="ipResult" class="font-mono bg-gray-100 p-3 rounded"></p>

        <input id="pingHost" type="text" placeholder="Masukkan host (contoh: google.com)" class="border p-2 rounded w-full">
        <button onclick="pingTest()" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">Tes Ping</button>
        <pre id="pingResult" class="bg-gray-100 p-3 rounded text-sm overflow-auto"></pre>

        <button onclick="runSpeedTest()" class="bg-orange-600 text-white px-4 py-2 rounded-lg hover:bg-orange-700">Tes Kecepatan</button>
        <pre id="speedResult" class="bg-gray-100 p-3 rounded text-sm overflow-auto"></pre>
    </div>
</div>

<script src="{{ asset('js/network.js') }}"></script>
@endsection
