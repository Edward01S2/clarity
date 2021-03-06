<section>
  <div id="split-content" class="container mx-auto px-6 lg:px-8">
    <div class="pb-16 lg:pb-20">
      <h2 class="text-2xl text-center leading-8 font-semibold text-c-blue-400 mb-4 md:text-3xl md:leading-normal lg:text-4xl lg:mb-8 lg:leading-tight">{!! $title !!}</h2>
      <p class="text-c-gray-200 text-center mb-8 md:mb-12 xl:text-lg">{!! $content !!}</p>

      <div class="split-section flex flex-col space-y-8 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-4 xl:gap-6">
        @foreach($items as $item)
          <div class="split-container bg-c-blue-150 rounded-lg p-8 pt-6 max-w-md mx-auto lg:max-w-none lg:mx-0 lg:flex lg:flex-col">
            <img class="h-20 mb-6 mr-auto xl:h-24" src="{!! $item['icon']['url'] !!}" alt="">
            <div class="split-grid flex flex-col space-y-8 lg:grid lg:grid-cols-2 lg:space-y-0 lg:gap-8 lg:flex-grow">
              @foreach($item['boxes'] as $box)
                <a class="split-box relative group" href="{!! $box['link']['url'] !!}">
                  <img class="w-full h-auto rounded-lg transition duration-300" src="{!! $box['bg']['url'] !!}" alt="">
                  <div class="absolute inset-x-0 text-center mb-8 bottom-0 xl:mb-12">
                    <div class="inline-block text-white font-semibold text-lg px-6 py-2 group-hover:text-c-blue-300 rounded-full group-hover:bg-white transition duration-500 md:text-xl lg:text-lg xl:text-xl">
                      {!! $box['title'] !!}
                    </div>
                  </div>
                </a>
              @endforeach
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>