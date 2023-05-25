<nav x-data="{ open: false }" class="bg-gray-800 fixed w-full z-20 top-0 left-0 px-2 sm:px-4 py-2.5">
    <div class="container max-w-7xl flex flex-wrap justify-between items-center mx-auto">
      <a href="\">
        <img class="block h-8 w-auto lg:hidden" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
        <img class="hidden h-8 w-auto lg:block" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
      </a>

      <div class="hidden w-full md:block md:w-auto md:block" id="main">
        <x-items/>
      </div>

      <button @click="open = !open" type="button" class="block w-auto md:hidden text-white" data-collapse-toggle="main">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      </button>
    </div>

    <span x-show="open">
      <x-items/>
    </span>
    
  </nav>