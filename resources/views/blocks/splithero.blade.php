<section>
  <div class="px-6 md:px-0">
    <div class="grid grid-rows-2 gap-8 py-12 md:flex md:flex-row md:space-y-0 md:py-0">

      <div id="split-hero-block" class="md:w-1/2 md:flex md:items-center xl:max-w-720 xl:ml-auto">
        <div class="md:px-8 md:py-12 lg:py-20 lg:px-16 xl:p-20">
          <h1 class="text-3xl text-center leading-10 font-semibold text-c-blue-400 mb-4 md:text-4xl md:text-left md:leading-10 lg:text-5xl lg:mb-8 lg:leading-none xl:text-6xl">{!! $title !!}</h1>
          <p class="text-c-gray-200 text-center mb-8 md:text-left lg:mb-12 xl:text-lg xl:max-w-lg">{!! $content !!}</p>
          <div class="mb-8 text-center md:text-left lg:mb-12">
            <a class="text-white font-semibold bg-c-blue-300 rounded-full px-12 py-3 border-2 border-c-blue-300 hover:bg-transparent hover:text-c-blue-300"href="{!! $link['url'] !!}">
              {!! $link['title'] !!}
            </a>
          </div>
          <a id="tour" href="#work-navi" class="group">
            <div class="flex items-center justify-center md:justify-start">
              <div class="text-c-blue-300 font-semibold group-hover:text-c-blue-400">{!! $sublink !!}</div>
              <svg class=" ml-4 h-6 w-6 fill-current text-c-blue-300 group-hover:text-c-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zM10 2a8 8 0 1 0 0 16 8 8 0 0 0 0-16zm-.7 10.54L5.75 9l1.41-1.41L10 10.4l2.83-2.82L14.24 9 10 13.24l-.7-.7z"/></svg>
            </div>
          </a>
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