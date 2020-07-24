@if($show)
<section>
  <div id="work-navi" class="sticky top-0 z-50" style="{!! $bg !!}">
    <div class="container mx-auto px-6 lg:px-8">
      <div class="md:flex md:items-center md:justify-between xl:justify-center xl:space-x-32">
        <div class="hidden md:block">
          <img src="{!! $logo['url'] !!}" alt="" class="block h-10 w-auto xl:h-12">
        </div>
        <div class="flex items-center space-x-8 lg:space-x-12">
          <div class="py-4 text-center flex-grow lg:hidden">
            <select id="work-select" class="form-select bg-white text-c-blue-300 font-semibold px-8 w-full rounded-full focus:outline-none active:outline-none" id="step-select">
              @foreach($items as $item)
                <option value="#{!! $item['url'] !!}">{!! sprintf("%02d", $loop->iteration) !!}. {!! $item['title'] !!}</option>
              @endforeach
            </select>
          </div>
          <div class="work-nav hidden justify-between items-center py-6 lg:flex lg:space-x-6 xl:space-x-10">
            <div class="text-white font-semibold flex-shrink-0 text-sm xl:text-base">How It Works:</div>
            @foreach($items as $item)
              <a class="relative text-white text-center text-sm font-semibold px-8 py-3 rounded-full hover:bg-c-blue-350 hover:text-white xl:text-base" href="#{!! $item['url'] !!}">{!! sprintf("%02d", $loop->iteration) !!}. {!! $item['title'] !!}</a>
            @endforeach
          </div>
        </div>
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

@endif
