<section class="bg-c-blue-300">
  <div class="container mx-auto px-6 lg:px-8">
    <div class="py-16 md:pb-20 lg:pb-24 lg:pt-20 xl:pb-28">
      <div class="customer-container">

        <div class="customer-dots mb-6 md:mb-8 lg:mb-12"></div>
        <div id="customer-slides">
          @foreach($items as $item)
            <div class="text-white text-center focus:outline-none active:outline-none md:px-12 lg:px-16" data-type="{!! $item['type'] !!}" @if($item['icon']) data-icon="{!! $item['icon']['url'] !!}" @endif">
              <div>
                <div class="text-xl font-semibold mb-6 md:text-3xl lg:text-4xl xl:text-5xl">{!! $item['title'] !!}</div>
                <p class="md:text-lg lg:text-xl xl:text-2xl xl:max-w-5xl xl:mx-auto">{!! $item['content'] !!}</p>
              </div>
              @if($item['featured'])
                <div class="flex flex-col space-y-8 mt-12 md:space-y-0 md:flex-row md:space-x-4 lg:space-x-8 lg:max-w-2xl lg:mx-auto xl:max-w-3xl">
                  @foreach($item['featured'] as $item)
                    <div class="flex flex-col items-center space-y-4">
                      <img class="h-24 w-24 lg:h-32 lg:w-32 xl:h-36 xl:w-36" src="{!! $item['image']['url'] !!}" alt="">
                      <p class="max-w-xs mx-auto">{!! $item['text'] !!}</p>
                    </div>
                  @endforeach
                </div>
              @endif
            </div>
          @endforeach
        </div>

      </div>
    </div>
  </div>
</section>

{{-- @dump($items) --}}