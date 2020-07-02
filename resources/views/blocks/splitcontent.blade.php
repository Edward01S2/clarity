<section>
  <div class="px-6 md:px-0">
    <div class="grid grid-rows-2 gap-8 py-12 md:flex md:flex-row md:space-y-0 md:py-0">

      <div id="split-content" class="md:w-1/2 md:flex md:items-center xl:max-w-720 xl:ml-auto">
        <div class="md:px-8 md:py-16 lg:py-20 lg:px-16 xl:p-28">
          <h3 class="text-2xl leading-8 font-semibold text-c-blue-400 mb-6 md:text-3xl md:leading-9 lg:text-4xl lg:mb-8 lg:leading-tight">{!! $title !!}</h3>
          <p class="text-c-gray-200 mb-6 xl:text-lg">{!! $content !!}</p>
          <div>
            <a class="text-c-blue-300 font-semibold flex items-center hover:underline"href="{!! $link['url'] !!}">
              {!! $link['title'] !!}
              <svg class="ml-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
            </a>
          </div>
        </div>
      </div>

      <div class="relative md:w-1/2">
        <a class="group" data-lity href="{!! $video !!}">
          <div class="bg-center bg-cover w-full h-full" style="background-image: url('{!! $poster['url'] !!}')">
          <div class="h-full w-full absolute top-0 flex items-center justify-center">
            <button class="focus:outline-none">
              <div class="rounded-full bg-white group-hover:bg-c-blue-300 transition duration-300">
                <div class="p-4 pr-3">
                  <svg class="text-c-blue-300 fill-current h-12 w-12 ml-1 group-hover:text-white transition duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M4 4l12 6-12 6z"/></svg>
                </div>
              </div>
            </button>
          </div>
        </a>
      </div>

    </div>
  </div>
</section>