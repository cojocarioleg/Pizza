<section class="section section-about">

  @foreach ($abouts as $about )
  <picture>
    <source type="image/webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" 
      data-srcset="{{Voyager::image($about->image_1)}}">
    <img class="section-about__img lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" 
      data-src="{{Voyager::image($about->image_2)}}" alt="">
  </picture>
  <div class="container section-about__container">
    <div class="section-about__content">
      <h2 class="page-title section-about__title">
        {{ $about->getTranslatedAttribute('title', App::getLocale(), 'fallbackLocale') }}
      </h2>
      <p class="section-about__text">
        {{ $about->getTranslatedAttribute('description', App::getLocale(), 'fallbackLocale') }}
      </p>
    </div>
  </div>
  @endforeach
  
</section>