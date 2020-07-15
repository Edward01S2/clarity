@if($show)
  <section class="bg-c-blue-300 mb-16 lg:mb-20">
    <div class="container mx-auto px-6 lg:px-8">
      <div class="quote-slider py-16 relative lg:py-20 xl:py-24">
        @foreach($quotes as $quote)
          <div class="text-white text-center focus:outline-none md:px-20 lg:px-28 xl:px-36">
            <div class="font-semibold mb-4 lg:text-lg lg:mb-8 xl:text-xl">{!! $quote['company'] !!}</div>
            <p class="leading-7 mb-4 text-lg lg:text-xl lg:mb-8 xl:text-2xl xl:leading-9">{!! $quote['quote'] !!}</p>
            <div class="mb-8 text-sm md:mb-0 lg:text-base xl:text-lg">
              <div class="font-semibold">{!! $quote['name'] !!}</div>
              <div class="">{!! $quote['company'] !!}</div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endif