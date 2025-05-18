<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Create Admin Account - TABLAH</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet">
</head>
<body class="min-h-screen flex">

  <div class="absolute top-0 left-0 ">
    <img src="images/2.png" alt="Logo" class="h-20 w-auto mb-10" />
  </div>

  <!-- Left Panel -->
<div class="hidden md:flex w-1/2 bg-[#050A24] flex-col justify-center items-start p-12 text-white ">
  <h1 class="text-[56px] font-light italic leading-tight font-[Poppins]">
    Welcome.<br />
    Start managing<br />
    your savings easily<br />
    and securely.
  </h1>
</div>



  <!-- Right Panel -->
  <div class="flex flex-1 flex-col justify-center p-8 bg-white-50">
    <div class="max-w-md w-full mx-auto">
      <h2 class="text-3xl font-semibold mb-6">Create an admin account</h2>
      <form class="space-y-4">
        <div>
          <label class="block text-gray-700">Username</label>
          <input type="text" placeholder="Enter your Username" class="w-full mt-1 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>
        <div>
          <label class="block text-gray-700">Full Name</label>
          <input type="text" placeholder="Enter your Full Name" class="w-full mt-1 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>
        <div>
          <label class="block text-gray-700">Email</label>
          <input type="email" placeholder="Enter your email" class="w-full mt-1 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>

        
        <!-- Password -->
        <div>
          <label class="block text-gray-700">Password</label>
          <div class="relative">
            <input type="password" placeholder="Enter your password" id="password" class="w-full mt-1 px-4 py-2 border rounded-lg pr-10 focus:outline-none focus:ring-2 focus:ring-blue-500" />
            <button type="button" class="absolute inset-y-0 right-0 px-3 flex items-center" onclick="togglePassword('password', this)">
              <!-- Eye open -->
              <svg xmlns="http://www.w3.org/2000/svg" class="eye-open h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M2.458 12C3.732 7.943 7.523 5 12 5s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7s-8.268-2.943-9.542-7z" />
              </svg>
              <!-- Eye closed -->
              <svg xmlns="http://www.w3.org/2000/svg" class="eye-closed h-6 w-6 text-gray-400 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a10.05 10.05 0 012.078-3.406M6.455 6.455A9.965 9.965 0 0112 5c4.478 0 8.268 2.943 9.542 7a10.02 10.02 0 01-4.113 5.228M3 3l18 18" />
              </svg>
            </button>
          </div>
        </div>
  
        <!-- Token -->
        <div>
          <label class="block text-gray-700">Verification Token</label>
          <div class="relative">
            <input type="password" placeholder="Enter your Token" id="token" class="w-full mt-1 px-4 py-2 border rounded-lg pr-10 focus:outline-none focus:ring-2 focus:ring-blue-500" />
            <button type="button" class="absolute inset-y-0 right-0 px-3 flex items-center" onclick="togglePassword('token', this)">
              <!-- Eye open -->
              <svg xmlns="http://www.w3.org/2000/svg" class="eye-open h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M2.458 12C3.732 7.943 7.523 5 12 5s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7s-8.268-2.943-9.542-7z" />
              </svg>
              <!-- Eye closed -->
              <svg xmlns="http://www.w3.org/2000/svg" class="eye-closed h-6 w-6 text-gray-400 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a10.05 10.05 0 012.078-3.406M6.455 6.455A9.965 9.965 0 0112 5c4.478 0 8.268 2.943 9.542 7a10.02 10.02 0 01-4.113 5.228M3 3l18 18" />
              </svg>
            </button>
          </div>
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">Create account</button>
      </form>
      <p class="text-center text-gray-600 mt-4">Already Have An Account? <a href="login-admin" class="text-blue-600">Log In</a></p>
    </div>
  </div>
  
  <!-- Script Toggle Mata -->
<script>
  function togglePassword(fieldId, button) {
    const input = document.getElementById(fieldId);
    const isVisible = input.type === "text";
    input.type = isVisible ? "password" : "text";

    const eyeOpen = button.querySelector(".eye-open");
    const eyeClosed = button.querySelector(".eye-closed");

    eyeOpen.classList.toggle("hidden", !isVisible);
    eyeClosed.classList.toggle("hidden", isVisible);
  }
</script>
</body>
</html>
