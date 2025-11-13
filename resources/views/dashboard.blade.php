@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold text-[#365f9c] mb-4">Dashboard</h1>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
  <div class="bg-[#f8fafc] p-6 rounded-xl shadow-md border border-gray-200">
    <h2 class="text-lg font-semibold text-[#365f9c] mb-2">Wi-Fi Test Overview</h2>
    <canvas id="speedChart" height="150"></canvas>
  </div>

  <div class="bg-[#f8fafc] p-6 rounded-xl shadow-md border border-gray-200">
    <h2 class="text-lg font-semibold text-[#365f9c] mb-2">Recent Activity</h2>
    <ul class="text-sm text-gray-700">
      <li>✅ Last diagnostic: 20ms ping, 50Mbps download</li>
      <li>🌐 IP scan completed: 12 devices active</li>
    </ul>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('speedChart');
new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Office Wi-Fi', 'Home Network'],
    datasets: [
      {
        label: 'Download Speed (Mbps)',
        data: [45.7, 60.3],
        backgroundColor: '#365f9c',
      },
      {
        label: 'Upload Speed (Mbps)',
        data: [10.2, 18.9],
        backgroundColor: '#93b5e1'
      }
    ]
  },
});
</script>
@endsection
