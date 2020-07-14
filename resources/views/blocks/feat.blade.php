<section id="feat-block" class="pb-12 lg:mt-8 xl:pb-16">
  <div class="container mx-auto px-6 lg:px-8">
    <div class="max-w-xs mx-auto md:max-w-none xl:max-w-6xl xl:mx-auto">
      <h2 class="text-2xl text-center leading-8 font-semibold text-c-blue-400 mb-8 md:text-3xl md:leading-normal lg:text-4xl lg:mb-12 lg:leading-tight">{!! $title !!}</h2>
      <div id="feat-slider" class="slider pt-4 md:flex md:space-x-8 lg:space-x-16">
        @foreach($items as $item)
          <div class="text-center focus:outline-none md:w-1/3">
            <div class="bg-c-blue-100 rounded-full inline-block p-6 mb-4 mx-auto">
              <img class="h-24 w-24 lg:h-32 lg:w-32" src="{!! $item['icon']['url'] !!}" alt="">
            </div>
            <div class="text-center mb-8">
              <div class="font-semibold text-c-blue-300 text-xl mb-2">{!! $item['title'] !!}</div>
              <p class="text-c-gray-200 xl:text-lg">{!! $item['content'] !!}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>