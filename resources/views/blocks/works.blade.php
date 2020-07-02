<section>
  <div id="work-navi" class="bg-c-blue-300 sticky top-0 z-50">
    <div class="container mx-auto px-6 lg:px-8">
      <div class="py-4 text-center lg:hidden">
        <select id="work-select" class="form-select bg-c-blue-350 text-white font-semibold border-c-blue-350 px-8 w-3/4 rounded-full focus:outline-none active:outline-none md:w-2/5" id="step-select">
          @foreach($items as $item)
            <option value="#{!! $item['url'] !!}">{!! $item['title'] !!}</option>
          @endforeach
        </select>
      </div>
      <div class="work-nav hidden justify-between items-center py-6 lg:flex">
        @foreach($items as $item)
          <a class="relative text-white text-center text-sm font-semibold px-8 py-3 rounded-full hover:bg-c-blue-350 xl:text-base" href="#{!! $item['url'] !!}">{!! $item['title'] !!}</a>
        @endforeach
      </div>
    </div>
  </div>

  <div class="container mx-auto px-6 lg:px-8">
    <div class="flex flex-col py-8 space-y-16 md:space-y-24 md:py-12">
      @foreach($items as $item)
      <div id="{!! $item['url'] !!}" class="work-section">
        <div  class="py-16 md:flex md:items-center md:space-x-8 lg:space-x-16 xl:max-w-6xl xl:mx-auto">
          <div class="mb-4 md:w-1/2 md:mb-0">
            <img src="{!! $item['img']['url'] !!}" alt="">
          </div>
          <div class="text-center md:w-1/2 md:text-left">
            <div class="font-semibold text-2xl text-c-blue-300 mb-2 md:mb-4 md:text-3xl lg:mb-8 xl:text-4xl">{!! $loop->index + 1 !!}. {!! $item['title'] !!}</div>
            <p class="text-c-gray-300 md:text-lg xl:text-xl">{!! $item['content'] !!}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
