<!DOCTYPE html>
<html lang="en" class="dark">
<head>
  <script src="https://cdn.tailwindcss.com"></script>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard - LimeTech</title>
</head>
<body class="min-h-screen bg-gradient-to-br from-blue-100 to-purple-100 dark:from-gray-800 dark:to-gray-900 text-gray-900 dark:text-white p-10">
  <div class="max-w-3xl mx-auto bg-white dark:bg-gray-800 shadow-lg rounded-xl p-8">
    <h1 class="text-3xl font-bold text-center text-blue-700 dark:text-blue-400 mb-6">Welcome to LimeTech Dashboard</h1>
    
    <div class="space-y-4 text-lg">
      <p><strong>Name:</strong> {{ $user->name }}</p>
      <p><strong>Username:</strong> {{ $user->username }}</p>
      <p><strong>Email:</strong> {{ $user->email }}</p>
      <p><strong>Age:</strong> {{ $user->age }}</p>
    </div>

    <form method="POST" action="/logout" class="mt-8 text-center">
      @csrf
      <button type="submit"
        class="bg-red-600 hover:bg-red-700 text-white font-semibold px-6 py-2 rounded-lg transition">
        Logout
      </button>
    </form>
  </div>
</body>
</html>



