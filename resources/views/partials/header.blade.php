<nav id="nav" x-data="{ open: false }" class="bg-white shadow">
  <div class="container mx-auto px-6 lg:px-8">
    <div class="flex justify-between h-16 lg:h-20">

      <div class="flex">
        <div class="flex-shrink-0 flex items-center">
          <a href="{{ home_url('/') }}" class="hover:opacity-50">
            <img class="block h-12 w-auto" src="{!! $logo['url'] !!}" alt="{{ $siteName }}" />
          </a>
          {{-- <img class="block h-12 w-auto" src="{!! $mobile_logo['url'] !!}" alt="{{ $siteName }}" /> --}}
        </div>
      </div>

      <div class="desktop hidden sm:flex sm:space-x-8 lg:space-x-12">
        @foreach ($navigation as $item)
          <a class="inline-flex items-center px-1 pt-1 border-b-3 border-transparent text-sm font-medium leading-5 text-c-blue-400 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out lg:text-base {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}" href="{{ $item->url }}">
            {{ $item->label }}
          </a>
        @endforeach
      </div>


      <div class="-mr-2 flex items-center sm:hidden">
        <!-- Mobile menu button -->
        <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out" aria-label="Main menu" aria-expanded="false">
          <!-- Icon when menu is closed. -->
          <svg :class="{'hidden': open, 'block': !open }" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
          <!-- Icon when menu is open. -->
          <svg :class="{'block': open, 'hidden': !open }" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!--
    Mobile menu, toggle classes based on menu state.

    Menu open: "block", Menu closed: "hidden"
  -->
  <div :class="{'block': open, 'hidden': !open }" class="mobile hidden sm:hidden">
    <div @click.away="open = false" class="pt-2 pb-3">
      <ul>
        @foreach ($navigation as $item)
          <li class="group relative {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}">
            <a class="mt-1 block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-100 hover:border-gray-400 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out" href="{{ $item->url }}">
              {{ $item->label }}
            </a>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</nav>