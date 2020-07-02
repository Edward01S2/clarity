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
        <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-c-blue-300 bg-c-blue-100 hover:text-c-blue-400 focus:outline-none transition duration-150 ease-in-out" aria-label="Main menu" aria-expanded="false">
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
  <div :class="{'block': open, 'hidden': !open }" class="mobile hidden bg-c-blue-300 sm:hidden">
    <div @click.away="open = false" class="py-4">
      <ul class="flex flex-col divide-y divide-c-blue-100 divide-opacity-50 px-6">
        @foreach ($navigation as $item)
          <li class="group relative text-center {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}">
            <a class="block py-4 text-xl text-white tracking-wider hover:font-semibold focus:outline-none transition duration-150 ease-in-out" href="{{ $item->url }}">
              {{ $item->label }}
            </a>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</nav>