@include('layout.header')

<!-- Hero Section -->
<div class="relative min-h-full bg-black">
    <!-- Background Image -->
    <img 
        src="https://dkemhji6i1k0x.cloudfront.net/000_clients/3418159/page/c22192zbNygdrUK7.jpg" 
        alt="Model Portfolio Banner"
        class="absolute inset-0 w-full h-full object-cover opacity-70"
    />

    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-black opacity-80"></div>

    <!-- Hero Content Centered -->
    <div class="relative z-10 flex items-center justify-center min-h-screen px-4">
        <div class="text-center text-white max-w-3xl space-y-6">
            <h1 class="text-5xl md:text-7xl font-extrabold leading-tight drop-shadow-xl">
                Elite Model Portfolio
            </h1>
            <p class="text-xl md:text-2xl font-light drop-shadow-md">
                Showcasing the finest in fashion, beauty, and talent worldwide
            </p>
            <a 
                href="#portfolio" 
                class="inline-block bg-white text-black text-lg font-medium px-8 py-3 rounded-full shadow-md hover:bg-gray-200 transition"
            >
                View Portfolio
            </a>
        </div>
    </div>
</div>

<section class="px-4 py-12 bg-white">
    <div class="max-w-7xl mx-auto">
      <!-- Section Title -->
      <h2 class="text-3xl md:text-4xl font-bold text-center mb-10">Our Models</h2>
  
      <!-- Category Buttons -->
      <div class="flex flex-wrap justify-center gap-3 mb-10">
        <button class="px-5 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-black hover:text-white transition">All</button>
        <button class="px-5 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-black hover:text-white transition">Runway</button>
        <button class="px-5 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-black hover:text-white transition">Editorial</button>
        <button class="px-5 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-black hover:text-white transition">Commercial</button>
        <button class="px-5 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-black hover:text-white transition">Fitness</button>
        <button class="px-5 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-black hover:text-white transition">Plus-Size</button>
        <button class="px-5 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-black hover:text-white transition">Swimwear</button>
      </div>
  
      <!-- Masonry-like Grid -->
      <div class="columns-1 sm:columns-2 md:columns-3 lg:columns-4 gap-4 space-y-4">
        <!-- Grid Item -->
        <div class="break-inside-avoid relative group">
          <img src="https://source.unsplash.com/random/600x800?model1" alt="Model" class="w-full rounded-xl shadow-md transition-transform duration-300 group-hover:scale-105">
          <div class="absolute bottom-4 left-4 bg-black bg-opacity-60 text-white text-xs px-3 py-1 rounded-full">Runway</div>
        </div>
  
        <div class="break-inside-avoid relative group">
          <img src="https://source.unsplash.com/random/600x750?model2" alt="Model" class="w-full rounded-xl shadow-md transition-transform duration-300 group-hover:scale-105">
          <div class="absolute bottom-4 left-4 bg-black bg-opacity-60 text-white text-xs px-3 py-1 rounded-full">Editorial</div>
        </div>
  
        <div class="break-inside-avoid relative group">
          <img src="https://source.unsplash.com/random/600x850?model3" alt="Model" class="w-full rounded-xl shadow-md transition-transform duration-300 group-hover:scale-105">
          <div class="absolute bottom-4 left-4 bg-black bg-opacity-60 text-white text-xs px-3 py-1 rounded-full">Fitness</div>
        </div>
  
        <div class="break-inside-avoid relative group">
          <img src="https://source.unsplash.com/random/600x700?model4" alt="Model" class="w-full rounded-xl shadow-md transition-transform duration-300 group-hover:scale-105">
          <div class="absolute bottom-4 left-4 bg-black bg-opacity-60 text-white text-xs px-3 py-1 rounded-full">Commercial</div>
        </div>
  
        <div class="break-inside-avoid relative group">
          <img src="https://source.unsplash.com/random/600x920?model5" alt="Model" class="w-full rounded-xl shadow-md transition-transform duration-300 group-hover:scale-105">
          <div class="absolute bottom-4 left-4 bg-black bg-opacity-60 text-white text-xs px-3 py-1 rounded-full">Plus-Size</div>
        </div>
  
        <div class="break-inside-avoid relative group">
          <img src="https://source.unsplash.com/random/600x780?model6" alt="Model" class="w-full rounded-xl shadow-md transition-transform duration-300 group-hover:scale-105">
          <div class="absolute bottom-4 left-4 bg-black bg-opacity-60 text-white text-xs px-3 py-1 rounded-full">Swimwear</div>
        </div>
      </div>
    </div>
</section>
  
