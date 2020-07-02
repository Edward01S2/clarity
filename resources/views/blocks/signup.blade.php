<section class="bg-c-blue-100">
  <div class="container mx-auto px-6 lg:px-8">
    <div class="py-12 md:py-16 lg:py-20 xl:py-24">
      <h3 class="text-2xl leading-8 text-center font-semibold text-c-blue-400 mb-4 md:text-3xl md:mb-8 md:leading-9 lg:text-4xl lg:mb-8 lg:leading-tight">{!! $title !!}</h3>
      <div class="lg:max-w-4xl lg:mx-auto">
        @include('partials.form', ['form' => $form])
      </div>
    </div>
  </div>
</section>