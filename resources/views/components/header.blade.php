<nav class="bg-white border-gray-200 shadow dark:bg-gray-800">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
      <span class="self-center text-2xl font-bold whitespace-nowrap dark:text-white">Valerie's Airline</span>
    </a>

    {{-- Hamburger Button --}}
    <button id="menu-toggle" class="md:hidden text-gray-700 dark:text-white focus:outline-none" aria-label="Toggle menu">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
           viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M4 6h16M4 12h16M4 18h16"></path>
      </svg>
    </button>

    {{-- Links --}}
    <div id="nav-links" class="w-full md:w-auto md:flex hidden flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-4 mt-4 md:mt-0">
      <a href="/" class="text-gray-700 dark:text-white hover:text-blue-600">Home</a>
      <a href="/flights" class="text-gray-700 dark:text-white hover:text-blue-600">Flights</a>
      {{-- Optional links
      <a href="/tickets" class="text-gray-700 hover:text-blue-600">Tickets</a>
      <a href="/details" class="text-gray-700 hover:text-blue-600">Details</a>
      --}}
    </div>
  </div>
</nav>

{{-- Toggle Script --}}
<script>
  const toggleBtn = document.getElementById('menu-toggle');
  const navLinks = document.getElementById('nav-links');

  toggleBtn.addEventListener('click', () => {
    navLinks.classList.toggle('hidden');
  });
</script>
