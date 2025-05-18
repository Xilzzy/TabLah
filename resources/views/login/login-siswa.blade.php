<!-- login-siswa.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Siswa</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center  bg-[#050A24]  text-gray-900 relative">

  <!-- Logo -->
  <div class="absolute top-6 left-6 flex items-center space-x-3">
    <img src="images/2.png" alt="Logo" class="h-20 w-auto mb-10" />
  </div>

  <!-- Login Box -->
  <div class="bg-white 50 backdrop-blur-md rounded-2xl shadow-xl p-8 w-full max-w-md">
    <h2 class="text-2xl font-semibold text-center mb-6">Login to your account</h2>
    <form>
      <div class="mb-4">
        <label class="block mb-1 text-sm">Email</label>
        <input type="email" placeholder="Enter your email"
          class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-300" />
      </div>
      <div class="mb-4">
        <div class="flex justify-between items-center">
          <label class="block mb-1 text-sm">Password</label>
          <a href="#" class="text-sm text-blue-600 hover:underline">Forgot?</a>
        </div>
        <div class="relative">
          <input id="password" type="password" placeholder="Enter your password"
                 class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-300" />
          <span id="togglePassword" class="absolute right-3 top-2.5 cursor-pointer">
            <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            </svg>
          </span>
        </div>
      </div>


      <button type="submit"
        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 rounded transition">Login now</button>
    </form>
    <p class="text-center text-sm mt-4">Don't Have An Account? <a href="signup-siswa" class="text-blue-600 hover:underline">Sign
        Up</a></p>
    <p class="text-center text-sm mt-1">Are You A Teacher? <a href="login-guru"
        class="text-blue-600 hover:underline">Log In As A Teacher</a></p>
  </div>

  <script>
    const togglePassword = document.getElementById("togglePassword");
    const passwordInput = document.getElementById("password");
    const eyeIcon = document.getElementById("eyeIcon");

    let isVisible = false;

    togglePassword.addEventListener("click", () => {
      isVisible = !isVisible;
      passwordInput.type = isVisible ? "text" : "password";

      // Optional: update icon
      eyeIcon.innerHTML = isVisible
        ? `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.956 9.956 0 012.047-3.368m3.387-2.338A9.956 9.956 0 0112 5c4.478 0 8.268 2.943 9.542 7a9.956 9.956 0 01-4.035 5.192M15 12a3 3 0 11-6 0 3 3 0 016 0zM3 3l18 18"/>`
        : `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />`;
    });
  </script>
</body>
</html>
