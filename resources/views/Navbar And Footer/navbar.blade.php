<div class="navbar flex justify-between items-center p-2">
    <div class="logo">
      <img src="{{asset('Images/FureverFamilyFinder.png')}}" class="h-10 w-40" alt="">
    </div>
    <div class="Account-Info md:order-3">
      <svg class="h-10 w-10 text-red-500 md:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
      </svg>

      <button
        class="h-10 w-40 border rounded-full hidden md:block bg-orange-500 text-white text-white-500 font-bold hover:bg-orange-600 focus:bg-orange-600 transition-colors duration-300">Login</button>

    </div>
    <div class="hamburger flex items-center md:order-2 " id="hamburger-menu">
      <svg class="h-8 w-8 text-black-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
        stroke-linecap="round" stroke-linejoin="round">
        <line x1="21" y1="10" x2="3" y2="10" />
        <line x1="21" y1="6" x2="3" y2="6" />
        <line x1="21" y1="14" x2="3" y2="14" />
        <line x1="21" y1="18" x2="3" y2="18" />
      </svg>
      <p class="ml-2 hidden sm:block font-bold">Menu</p>
    </div>
  </div>
  <div id="menu-overlay" class="hidden fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-75 z-50">
    <div class="absolute top-0 right-0 p-4">
      <button id="close-menu" class="text-white text-2xl">&times;</button>
    </div>
    <div class="flex flex-col justify-center items-center h-full">
      <!-- Your menu items here -->
      <a href="{{route('HomePage')}}" class="text-white text-xl my-4">Home</a>
      <a href="{{route('AboutUsPage')}}" class="text-white text-xl my-4">About Us</a>
      <a href="#" class="text-white text-xl my-4">Login</a>
      <a href="#" class="text-white text-xl my-4">Feedback</a>
      <a href="#" class="text-white text-xl my-4">Admin Login</a>
    </div>
  </div>