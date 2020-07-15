<section class="relative overflow-hidden bg-right bg-cover md:bg-center" style="background-image:url('{!! $bg['url'] !!}')">
  <div class="z-20 relative container mx-auto px-6 lg:px-8">
    <div class="fade-up relative py-16 md:py-24 lg:mx-auto lg:max-w-3xl lg:py-32 xl:py-40 xl:max-w-5xl">
      <h1 id="hero-title" class="text-3xl text-center leading-10 font-semibold text-white mb-4 md:text-4xl md:leading-normal lg:text-5xl lg:mb-8 lg:leading-tight xl:text-6xl">{!! $title !!}</h1>
      <p class="text-white text-center mb-8 leading-7 md:max-w-2xl md:mx-auto lg:text-lg lg:max-w-none xl:text-xl xl:px-12">{!! $subtitle !!}</p>
      <div class="flex justify-center mb-8">
        <div class="inline-flex flex-col space-y-6 text-center md:flex-row md:space-y-0 md:flex md:space-x-8">
          @foreach($links as $link)
            <a class="inline-block px-16 py-4 bg-c-blue-300 text-white border-2 border-transparent font-semibold rounded-full lg:text-xl hover:bg-c-blue-400" href="{!! $link['link']['url'] !!}">{!! $link['link']['title'] !!}</a>
          @endforeach
        </div>
      </div>
      <div class="absolute bottom-0 left-0 right-0 mb-8">
        <a id="hero-scroll" href="#split-content" class="group">
          <svg class="h-8 w-8 text-white fill-current mx-auto hover:opacity-50 lg:h-10 lg:w-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zM10 2a8 8 0 1 0 0 16 8 8 0 0 0 0-16zm-.7 10.54L5.75 9l1.41-1.41L10 10.4l2.83-2.82L14.24 9 10 13.24l-.7-.7z"/></svg>
        </a>
      </div>
    </div>

    {{-- <div id="vid-container" class="relative mb-12 lg:max-w-3xl lg:mx-auto lg:mb-16 xl:max-w-5xl">
      <a class="group" data-lity href="{!! $video !!}">
        <img src="{!! $video_poster['url'] !!}" alt="">
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
    
      <div class="hidden absolute top-0 left-0 xl:block xl:-ml-44 2xl:-ml-44"><img class="h-20 w-32 object-cover 2xl:w-36 2xl:h-24" src="{!! $bg_photos[0]['url'] !!}" alt=""></div>
      <div id="vid-img-2" class="hidden absolute top-0 right-0 lg:block lg:mt-24 lg:-mr-24 xl:mt-48"><img class="h-32 xl:h-40" src="{!! $bg_photos[1]['url'] !!}" alt=""></div>
      <div id="vid-img-3" class="hidden absolute bottom-0 left-0 lg:block lg:-ml-24 lg:-mb-16 xl:-ml-48 xl:pl-4 2xl:pl-6"><img class="h-24 xl:h-32" src="{!! $bg_photos[2]['url'] !!}" alt=""></div>
      <div class="hidden absolute bottom-0 right-0 xl:block xl:-mr-36 xl:pr-4 xl:-mb-32"><img class="h-36" src="{!! $bg_photos[3]['url'] !!}" alt=""></div>
    </div> --}}  

  </div>


  {{-- BLOCKS --}}
  {{-- <div class="hidden md:block md:-ml-40 absolute top-0 xl:ml-0"><img src="@asset('images/block_1.png')" alt=""></div>
  <div class="hidden md:block absolute top-0 right-0"><img src="@asset('images/block_2.png')" alt=""></div>
  <div class="hidden absolute bottom-0 left-0 lg:block lg:-mb-20 lg:-ml-16 xl:-mb-12 xl:ml-0"><img src="@asset('images/block_3.png')" alt=""></div>
  <div class="absolute inset-y-0 left-0 flex items-center md:mt-64 lg:mb-24"><img src="@asset('images/sphere_1.png')" alt=""></div>
  <div class="hidden lg:block md:-mr-16 absolute right-0 bottom-0 lg:-mr-8 lg:mb-36 xl:mb-16 xl:mr-0"><img src="@asset('images/sphere_2.png')" alt=""></div> --}}


</section>
