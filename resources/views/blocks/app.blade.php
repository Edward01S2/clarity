<section class="bg-c-blue-50">
  <div class="container mx-auto px-6 lg:px-8">
    <div class="text-center py-12 pt-8 md:py-16 mt:pt-12 lg:py-20 lg:pt-16 xl:py-24 xl:pt-20">
      <div class="">
        <img class="h-40 w-auto mx-auto lg:h-48 xl:h-56" src="{!! $icon['url'] !!}" alt="">
      </div>
      <h3 class="text-3xl text-center leading-10 font-semibold text-c-blue-400 mb-8 md:text-4xl md:leading-10 lg:text-5xl lg:mb-12 lg:leading-tight xl:text-6xl">{!! $title !!}</h3>
      <div class="flex items-center justify-center space-x-4 xl:space-x-8">
        @foreach($download as $item)
          <a href="{!! $item['url']!!}" class="hover:opacity-75">
            <img class="h-10 w-auto lg:h-12 xl:h-16" src="{!! $item['icon']['url'] !!}" alt="">
          </a>
        @endforeach
      </div>
    </div>
  </div>
</section>