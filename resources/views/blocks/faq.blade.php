<section>
  <div class="container mx-auto px-6 lg:px-8">
    <div class="py-12 md:py-16 lg:py-20 lg:max-w-3xl lg:mx-auto xl:py-24 xl:max-w-5xl">
      <h1 class="text-3xl text-center leading-10 font-semibold text-c-blue-400 mb-12 md:text-4xl md:leading-normal md:mb-16 lg:text-5xl lg:mb-20 lg:leading-tight xl:text-6xl">{!! $title !!}</h1>
    
      <div class="flex flex-col space-y-6">
        @foreach($faq as $item)
          <div
            @if($loop->first) 
              x-data="{open: true}" 
            @else
              x-data="{open: false}"
            @endif
            class="border-c-blue-150 border-3">
            <div @click="open = !open" class="relative z-30 bg-white text-c-blue-400 font-semibold px-4 py-3 flex items-center justify-between cursor-pointer md:px-6 md:py-4 lg:px-8 lg:py-6">
              <div class="md:text-lg lg:text-xl">{!! $item['question'] !!}</div>
              <button type="button" class="inline-block focus:outline-none">
                <svg x-show="!open" class="h-5 w-5 stroke-current text-c-blue-400 lg:h-6 lg:w-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                <svg x-show="open" class="h-5 w-5 stroke-current text-c-blue-400 lg:h-6 lg:w-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg>
              </button>
            </div>
            <div x-show="open" class="relative z-20 text-c-gray-200 bg-c-blue-150 px-4 py-3 md:px-6 md:py-4 md:text-lg lg:text-xl lg:px-8 lg:py-6">
              {!! $item['answer'] !!}
            </div>
          </div>
        @endforeach
      </div>

    </div>
  </div>
</section>

