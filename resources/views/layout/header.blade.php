<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Beauty Vibes</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class=" min-h-screen">
  
    <nav class=" top-0 left-0 w-full z-50 backdrop-blur-lg bg-white/30 shadow-md">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
          <!-- Logo -->
          <div class="flex-shrink-0 text-[#620043] font-bold text-xl tracking-wide">
            BeautyModels
          </div>
  
          <!-- Desktop Menu -->
          <div class="hidden md:flex space-x-8 items-center">
            <a href="#" class="text-gray-700 hover:text-pink-600 transition">Home</a>
            <a href="#" class="text-gray-700 hover:text-pink-600 transition">Models</a>
            <a href="#" class="text-gray-700 hover:text-pink-600 transition">About</a>
            <a href="#" class="text-gray-700 hover:text-pink-600 transition">Contact</a>
          </div>
  
          <!-- Mobile Hamburger -->
          <div class="md:hidden flex items-center">
            <button id="menu-toggle" class="text-gray-700 focus:outline-none">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </button>
          </div>
        </div>
      </div>
  
      <!-- Mobile Menu -->
      <div id="mobile-menu" class="md:hidden hidden px-4 pb-4">
        <a href="#" class="block py-2 text-gray-700 hover:text-pink-600">Home</a>
        <a href="#" class="block py-2 text-gray-700 hover:text-pink-600">Models</a>
        <a href="#" class="block py-2 text-gray-700 hover:text-pink-600">About</a>
        <a href="#" class="block py-2 text-gray-700 hover:text-pink-600">Contact</a>
      </div>
    </nav>
  
    <script>
      const toggle = document.getElementById('menu-toggle');
      const menu = document.getElementById('mobile-menu');
  
      toggle.addEventListener('click', () => {
        menu.classList.toggle('hidden');
      });
    </script>
  
    
  
 
</body>
</html>
