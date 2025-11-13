<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Network Diagnostic Tool</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans text-gray-800">

  <!-- Navbar -->
  <nav class="bg-[#365f9c] shadow-lg">
    <div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between">
      <div class="flex items-center space-x-4">
        <span class="text-white text-xl font-semibold tracking-wide">Network Diagnostic Tool</span>
      </div>

      <ul class="flex space-x-6">
        <li><a href="{{ route('dashboard') }}" class="text-gray-200 hover:text-white transition">Dashboard</a></li>
        <li><a href="{{ route('diagnostic') }}" class="text-gray-200 hover:text-white transition">Diagnostic</a></li>
        <li><a href="{{ route('ipfinder') }}" class="text-gray-200 hover:text-white transition">IP Finder</a></li>
        <li><a href="{{ route('logs') }}" class="text-gray-200 hover:text-white transition">Logs</a></li>
      </ul>
    </div>
  </nav>

  <!-- Main Content -->
  <main class="max-w-7xl mx-auto mt-8 p-6 bg-white rounded-xl shadow-md">
    @yield('content')
  </main>

  <!-- Footer -->
  <footer class="mt-10 py-4 bg-gray-200 text-center text-sm text-gray-600 rounded-t-xl">
    &copy; {{ date('Y') }} Network Diagnostic Tool — Built with Laravel & TailwindCSS
  </footer>

</body>
</html>
