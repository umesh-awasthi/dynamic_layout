<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 min-h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-md">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Admin Login</h1>

        @if ($errors->any())
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-3 rounded mb-4">
                <p>{{ $errors->first() }}</p>
            </div>
        @endif

        <form method="POST" action="{{ url('/admin/login') }}">
            @csrf

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700" for="email">Email</label>
                <input type="email" name="email" id="email" class="mt-1 block w-full p-2 border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-indigo-400 focus:outline-none" placeholder="Enter your email" required>
            </div>

            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700" for="password">Password</label>
                <input type="password" name="password" id="password" class="mt-1 block w-full p-2 border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-indigo-400 focus:outline-none" placeholder="Enter your password" required>
            </div>

            <button type="submit" class="w-full bg-indigo-600 text-white font-semibold py-2 rounded-md hover:bg-indigo-700 transition duration-200 ease-in-out shadow-md">
                Login
            </button>
        </form>

    </div>

</body>
</html>
