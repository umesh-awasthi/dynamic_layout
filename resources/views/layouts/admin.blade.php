<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <!-- ✅ Tailwind CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen">
    <!-- Navbar -->
    <nav class="bg-white shadow p-4">
        <div class="flex justify-between items-center">
            <span class="text-xl font-bold">Admin Panel</span>
        </div>
    </nav>

    <!-- Layout container -->
    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow h-screen sticky top-0">
            <div class="p-6">
                {{-- <h2 class="text-lg font-semibold mb-4">Navigation</h2> --}}
                <ul class="space-y-2">
                    {{-- <li><a href="#" class="block px-4 py-2 rounded hover:bg-gray-100">Dashboard</a></li> --}}
                    <li><a href="{{ route('admin.category.layout') }}" class="block px-4 py-2 rounded hover:bg-gray-100">Settings</a></li>
                    {{-- <li><a href="#" class="block px-4 py-2 rounded hover:bg-gray-100">Users</a></li>
                    <li><a href="#" class="block px-4 py-2 rounded hover:bg-gray-100">Reports</a></li> --}}
                </ul>
            </div>
        </aside>

        <!-- Main content -->
        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>
</body>
</html>
