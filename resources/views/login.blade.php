<!DOCTYPE html>
<html lang="en" class="dark">
<head>
  <script src="https://cdn.tailwindcss.com"></script>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - LimeTech</title>
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-100 to-purple-100 dark:from-gray-800 dark:to-gray-900 text-gray-900 dark:text-white transition duration-300">
  <div class="bg-white/30 dark:bg-white/10 backdrop-blur-md border border-white/40 dark:border-white/20 rounded-2xl shadow-lg p-1 w-full max-w-md">
    <div class="bg-white dark:bg-gray-800 rounded-2xl px-8 py-10 shadow-lg">
      <div class="flex flex-col items-center mb-8">
        <img src="pic/logo2.png" alt="Logo" class="w-16 h-16 mb-2">
        <h1 class="text-2xl font-bold text-blue-700 dark:text-blue-400">LimeHills</h1>
        <p class="text-sm text-gray-600 dark:text-gray-400">Consulting Agency</p>
      </div>
      <form action="login" method="post" class="space-y-5"> @csrf
        <div>
          <label for="username" class="block text-sm font-medium mb-1 text-gray-700 dark:text-gray-300">Username</label>
          <input type="text" id="username" name="username" required
            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-white shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 transition"/>
        </div>
        <div>
          <label for="password" class="block text-sm font-medium mb-1 text-gray-700 dark:text-gray-300">Password</label>
          <input type="password" id="password" name="password" required
            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-white shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 transition"/>
        </div>
        <div class="flex items-center justify-between text-sm">
          <label class="flex items-center gap-2">
            <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600 dark:bg-gray-700 border-gray-300 dark:border-gray-600">
            <span class="text-gray-600 dark:text-gray-400">Remember me</span>
          </label>
          <a href="#" class="text-blue-600 dark:text-blue-400 hover:underline">Forgot Password?</a>
        </div>
        <div>
          <input type="submit" value="Login"
            class="w-full bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-semibold py-2 rounded-lg transition duration-300 shadow-md"/>
        </div>
      </form>
      <p class="mt-6 text-center text-sm text-gray-600 dark:text-gray-400">
        Don't have an account?
        <a href="{{ url('/register') }}" class="text-purple-700 dark:text-purple-400 font-medium hover:underline">Sign up now</a>
      </p>
    </div>
  </div>
</body>
</html>


