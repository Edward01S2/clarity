<footer>
  <div class="container mx-auto px-6 lg:px-8">
    <div class="flex flex-col items-center space-y-6 pt-12 pb-8 border-b border-c-gray-100 md:flex-row md:space-y-0 md:items-center md:justify-between lg:pt-16 lg:pb-12">

      <div class="flex-shrink-0 flex items-center">
        <a href="{{ home_url('/') }}">
          <img class="block h-12 w-auto" src="{!! $logo['url'] !!}" alt="{{ $siteName }}" />
        </a>
        {{-- <img class="block h-12 w-auto" src="{!! $mobile_logo['url'] !!}" alt="{{ $siteName }}" /> --}}
      </div>

      @foreach ($navigation as $item)
        @if($item->label !== 'Home')
          <a class="px-1 pt-1 text-base font-semibold leading-5 text-c-blue-300 hover:text-gray-700 focus:outline-none focus:text-gray-700 transition duration-150 ease-in-out md:text-sm lg:text-base {{ $item->classes ?? '' }}" href="{{ $item->url }}">
            {{ $item->label }}
          </a>
        @endif
      @endforeach
      
      <div class="flex space-x-8 md:space-x-4 lg:space-x-8 xl:space-x-16">
        @foreach($social as $x)
          <a href="{!! $x['url'] !!}">
            <img class="h-8 w-8 hover:scale-105 transform transition duration-500" src="{!! $x['icon']['url'] !!}" alt="">
          </a>
        @endforeach
      </div>

      <a id="return-top" class="px-1 pt-1 text-base font-semibold leading-5 text-c-blue-300 hover:text-gray-700 focus:outline-none focus:text-gray-700 transition duration-150 ease-in-out md:text-sm lg:text-base {{ $item->classes ?? '' }}" href="#nav">
        Back to Top
      </a>

    </div>

    <div class="flex flex-col text-center text-sm space-y-4 py-8 md:flex-row md:space-y-0 md:flex-wrap md:justify-between lg:text-xs xl:text-sm">

      <div class="text-c-gray-200 md:mb-4 lg:mb-0">
        <span>&copy; <?php echo esc_attr( date( 'Y' ) ); ?></span>
        <span class="capitalize">{{ $siteName }}</span>. All rights reserved.
      </div>

      @foreach ($footer as $item)
        <div class="text-c-gray-200 md:mb-4 lg:mb-0">{!! $item['item'] !!}</div>
      @endforeach

    </div>

  </div>
</footer>
