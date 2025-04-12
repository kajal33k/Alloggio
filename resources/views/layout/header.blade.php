<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Alloggio Sidebar</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#f9f7f1] font-serif h-screen flex">

  <!-- Sidebar -->
  <aside class="w-72 min-h-screen px-6 py-8 bg-[#f9f7f1] border-r border-gray-200 flex flex-col justify-between">
    
    <!-- Top section: Branding & Menu -->
    <div>
      <!-- Logo Section -->
      <div class="mb-10">
        <h1 class="text-2xl font-bold text-gray-800 mb-2">MainLogo</h1>
        <p class="text-sm text-gray-500">DarkLogo / LightLogo</p>
      </div>

      <!-- Navigation -->
      <nav class="space-y-2">
        <a href="#" class="block text-gray-800 hover:text-black font-medium">Home</a>
        <a href="#" class="block text-gray-800 hover:text-black font-medium">Rooms</a>
        
        <!-- Dropdown trigger -->
        <div class="relative">
          <button onclick="toggleDropdown()" class="w-full text-left font-medium text-gray-800 hover:text-black focus:outline-none">
            Pages
          </button>
          <div id="dropdown" class="hidden opacity-0 scale-95 transition-all duration-300 ease-out mt-1 bg-white shadow-md rounded-md text-left z-10">
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">About Us</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Contact</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Services</a>
          </div>
        </div>

        <a href="#" class="block text-gray-800 hover:text-black font-medium">Gallery</a>
        <a href="#" class="block text-gray-800 hover:text-black font-medium">Blog</a>
        <a href="#" class="block text-gray-800 hover:text-black font-medium">Landing</a>
      </nav>
    </div>

    <!-- Bottom section: Contact Info -->
    <div class="mt-10 space-y-2 text-sm text-gray-600">
      <p><span class="font-semibold text-gray-800">A:</span> Via Venti Settembre, Roma</p>
      <p><span class="font-semibold text-gray-800">P:</span> +31 555 777 83</p>
      <p><span class="font-semibold text-gray-800">App:</span> Viber, WhatsApp</p>
      <p><span class="font-semibold text-gray-800">E:</span> info@allogio.com</p>
    </div>

  </aside>

  <!-- Page content placeholder -->
  <main class="flex-1 p-6">
    <!-- Your main content here -->
    <h2 class="text-2xl font-semibold text-gray-800">Welcome to Alloggio</h2>
  </main>

  <script>
    const dropdown = document.getElementById('dropdown');
    let isOpen = false;

    function toggleDropdown() {
      isOpen = !isOpen;
      if (isOpen) {
        dropdown.classList.remove('hidden');
        setTimeout(() => {
          dropdown.classList.add('opacity-100', 'scale-100');
          dropdown.classList.remove('opacity-0', 'scale-95');
        }, 10);
      } else {
        dropdown.classList.add('opacity-0', 'scale-95');
        dropdown.classList.remove('opacity-100', 'scale-100');
        setTimeout(() => {
          dropdown.classList.add('hidden');
        }, 300);
      }
    }

    document.addEventListener('click', (e) => {
      if (!e.target.closest('button') && !e.target.closest('#dropdown')) {
        if (isOpen) toggleDropdown();
      }
    });
  </script>

</body>
</html>
