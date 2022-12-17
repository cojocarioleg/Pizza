<header class="header-page">
  <div class="container header-page__container">
    <div class="header-page__start">
      <div class="logo">
        <img class="logo__img lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="{{ asset('/img/common/logo.svg') }}" alt="" width="127" height="21">
      </div>
    </div>
    <div class="header-page__end">
      <nav class="header-page__nav">
        <ul class="header-page__ul">
          <li class="header-page__li">
            <a class="header-page__link" href="pita" data-scroll-to="section-catalog">
              <span class="header-page__text">
                @lang('menu.pita')
              </span>
            </a>
          </li>
          <li class="header-page__li">
            <a class="header-page__link" href="#" data-scroll-to="section-about">
              <span class="header-page__text">
                @lang('menu.about')
              </span>
            </a>
          </li>
          <li class="header-page__li">
            <a class="header-page__link" href="#" data-scroll-to="section-contacts">
              <span class="header-page__text">
                @lang('menu.contact')
              </span>
            </a>
          </li>
        </ul>
      </nav>
      <div class="phone">
        <a class="phone__item header-page__phone" href="tel:{{ setting('site.phone') }}">{{ setting('site.phone') }}</a>
      </div>
      <li class="header-page__li">
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
          <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
            {{ $localeCode }}
          </a>                  
        @endforeach 
      </li>
      

      <div class="header-page__hamburger">
        <button class="btn-menu" type="button" data-popup="popup-menu">
          <span class="btn-menu__box">
            <span class="btn-menu__inner"></span>
          </span>
        </button>
      </div>
    </div>
  </div>
  @include('succes')
</header>