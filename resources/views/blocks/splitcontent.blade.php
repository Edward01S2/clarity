<section>
  <div id="split-content" class="container mx-auto px-6 lg:px-8">
    <div class="py-16 lg:py-20 xl:py-24">
      <h2 class="text-2xl text-center leading-8 font-semibold text-c-blue-400 mb-4 md:text-3xl md:leading-normal lg:text-4xl lg:mb-8 lg:leading-tight">{!! $title !!}</h2>
      <p class="text-c-gray-200 text-center mb-8 md:mb-12 xl:text-lg">{!! $content !!}</p>
      <div class="grid grid-rows-2 gap-6 md:grid-cols-2 md:grid-rows-none lg:gap-8 xl:gap-12 xl:max-w-6xl xl:mx-auto">
        @foreach($items as $item)
          <a href="{!! $item['link']['url'] !!}">
            <div class="bg-center bg-cover rounded-lg" style="background-image:url('{!! $item['bg']['url'] !!}');">
              <div class="text-white font-semibold text-center py-24 text-2xl tracking-wide md:py-28 lg:py-40 xl:py-48 xl:text-3xl">{!! $item['title'] !!}</div>
              <div class="flex items-center rounded-b-lg justify-between p-4 py-6 lg:p-6 lg:py-8 xl:p-8 xl:py-10" style="{!! $item['gradient'] !!}">
                <img class="h-8 w-auto lg:h-10 xl:h-12" src="{!! $item['icon']['url'] !!}" alt="">
                <div>
                  <div class="font-semibold text-c-blue-300 bg-white rounded-full border-2 border-transparent px-6 py-3 hover:bg-transparent hover:border-white hover:text-white lg:px-12 transition duration-300" href="{!! $item['link']['url'] !!}">{!! $item['link']['title'] !!}</div>
                </div>
              </div>
            </div>
          </a>
        @endforeach
      </div>
    </div>
  </div>
</section>