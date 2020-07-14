<section class="contact">
  <div class="container mx-auto px-6 lg:px-8">
    <div id="contact-block" class="py-12 pb-16 md:max-w-xl md:pt-16 md:mx-auto lg:max-w-3xl lg:py-20 xl:max-w-4xl">
      <h1 class="text-3xl text-center leading-10 font-semibold text-c-blue-400 mb-4 md:text-4xl md:leading-normal lg:text-5xl lg:mb-8 lg:leading-tight xl:text-6xl">{!! $title !!}</h1>
      <p class="text-c-gray-200 text-center mb-8 leading-7 md:max-w-lg md:mb-12 md:mx-auto lg:text-lg lg:mb-16 lg:max-w-xl xl:text-xl xl:mb-20 xl:max-w-2xl">{!! $content !!}</p>
      <div class="bg-c-blue-300 p-6 py-8 md:p-8 lg:py-12">
        @include('partials.form', ['form' => $form])
      </div>
    </div>
  </div>
</section>