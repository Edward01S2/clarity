<section class="relative overflow-hidden">
  <div class="z-20 relative container mx-auto px-6 lg:px-8">
    <div class="fade-up pt-12 pb-12 md:pt-16 lg:mx-auto lg:max-w-3xl lg:pt-24 lg:pb-24 xl:max-w-5xl">
      <h1 id="hero-title" class="text-3xl text-center leading-10 font-semibold text-c-blue-400 mb-4 md:text-4xl md:leading-normal lg:text-5xl lg:mb-8 lg:leading-tight xl:text-6xl">{!! $title !!}</h1>
      <p class="text-c-gray-200 text-center mb-8 leading-8 md:max-w-2xl md:mx-auto lg:text-lg lg:max-w-none xl:text-xl xl:px-12">{!! $subtitle !!}</p>
      <div class="text-center lg:max-w-4xl lg:mx-auto">
        <a class="inline-block px-12 py-3 bg-c-blue-300 text-white font-semibold rounded-full md:w-1/3 lg:text-xl hover:bg-c-blue-400" href="{!! $link['url'] !!}">{!! $link['title'] !!}</a>
      </div>
    </div>

    <div id="vid-container" class="relative mb-12 lg:max-w-3xl lg:mx-auto lg:mb-16 xl:max-w-5xl">
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
    </div>

    <div id="trig-logo" class="pb-8 lg:pb-0 lg:max-w-3xl lg:mx-auto xl:max-w-5xl">
      <div class="text-c-blue-300 text-center font-semibold text-xl mb-4">{!! $comp_text !!}</div>
      <div>
        <div class="flex flex-wrap justify-center">
          @foreach($companies as $comp)
            <a class="inline-block px-3 pb-2 w-1/2 md:w-1/4 md:px-4 xl:w-1/5" href="{!! $comp['url'] !!}">
              <img class="" src="{!! $comp['logo']['url'] !!}" alt="">
            </a>
            {{-- @dump($comp) --}}
          @endforeach
        </div>
      </div>
    </div>
  

  </div>


  {{-- BLOCKS --}}
  <div class="hidden md:block md:-ml-40 absolute top-0 xl:ml-0"><img src="@asset('images/block_1.png')" alt=""></div>
  <div class="hidden md:block absolute top-0 right-0"><img src="@asset('images/block_2.png')" alt=""></div>
  <div class="hidden absolute bottom-0 left-0 lg:block lg:-mb-20 lg:-ml-16 xl:-mb-12 xl:ml-0"><img src="@asset('images/block_3.png')" alt=""></div>
  <div class="absolute inset-y-0 left-0 flex items-center md:mt-64 lg:mb-24"><img src="@asset('images/sphere_1.png')" alt=""></div>
  <div class="hidden lg:block md:-mr-16 absolute right-0 bottom-0 lg:-mr-8 lg:mb-36 xl:mb-16 xl:mr-0"><img src="@asset('images/sphere_2.png')" alt=""></div>



</section>