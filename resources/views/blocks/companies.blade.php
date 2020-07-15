@if($show)
  <section>
    <div class="container mx-auto px-6 lg:px-8">
      <div id="trig-logo" class="pt-12 md:pt-12 lg:max-w-3xl lg:mx-auto xl:max-w-5xl">
        <div class="text-c-blue-300 text-center font-semibold text-xl mb-4">{!! $title!!}</div>
        <div>
          <div class="flex flex-wrap justify-center">
            @foreach($companies as $comp)
              <a class="inline-block px-3 pb-2 w-1/2 md:w-1/4 md:px-4 xl:w-1/5" href="{!! $comp['url'] !!}">
                <img class="" src="{!! $comp['logo']['url'] !!}" alt="">
              </a>
              {{-- @dump($comp) --}}
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
@endif