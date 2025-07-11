<!DOCTYPE html>
<html lang="en" class="dark">
<head>
  <script src="https://cdn.tailwindcss.com"></script>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register - LimeHills</title>
</head>
<body class="bg-gradient-to-br from-blue-100 to-purple-100 dark:from-gray-800 dark:to-gray-900 min-h-screen flex items-center justify-center text-gray-900 dark:text-white">
  <div class="bg-white/30 dark:bg-white/10 backdrop-blur-md border border-white/40 dark:border-white/20 rounded-2xl p-1 w-full max-w-md shadow-lg">
    <div class="bg-white dark:bg-gray-800 rounded-2xl px-8 py-10 shadow-lg">
      <div class="flex flex-col items-center mb-6">
        <img src="pic/logo2.png" alt="Logo" class="w-16 h-16 mb-2">
        <h1 class="text-2xl font-bold text-blue-700 dark:text-blue-400">LimeHills</h1>
        <p class="text-sm text-gray-600 dark:text-gray-400">Create your account</p>
      </div>
      <form action="" method="post" class="space-y-5">@csrf
        <div>
          <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
          <input type="text" id="name" name="name" autocomplete="off" required
            class="w-full mt-1 px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-white shadow-sm focus:ring-2 focus:ring-purple-500 focus:outline-none"/>
        </div>
        <div>
          <label for="username" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Username</label>
          <input type="text" id="username" name="username" autocomplete="off" required
            class="w-full mt-1 px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-white shadow-sm focus:ring-2 focus:ring-purple-500 focus:outline-none"/>
        </div>
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
          <input type="email" id="email" name="email" autocomplete="off" required
            class="w-full mt-1 px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-white shadow-sm focus:ring-2 focus:ring-purple-500 focus:outline-none"/>
        </div>
        <div>
          <label for="age" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Age</label>
          <input type="number" id="age" name="age" autocomplete="off" required
            class="w-full mt-1 px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-white shadow-sm focus:ring-2 focus:ring-purple-500 focus:outline-none"/>
        </div>
        <div>
          <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
          <input type="password" id="password" name="password" autocomplete="off" required
            class="w-full mt-1 px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-white shadow-sm focus:ring-2 focus:ring-purple-500 focus:outline-none"/>
        </div>
        <div>
          <input type="submit" name="submit" value="Register"
            class="w-full bg-gradient-to-r from-purple-600 to-pink-600 text-white font-semibold py-2 rounded-lg hover:from-purple-700 hover:to-pink-700 transition duration-300 shadow-md"/>
        </div>
      </form>
      <div class="mt-6 text-center text-sm text-gray-600 dark:text-gray-400">
        Already a member?
        <a href="{{ url('/login') }}" class="text-purple-700 dark:text-pink-400 font-medium hover:underline transition">Sign In</a>
      </div>
    </div>
  </div>
</body>
</html>

