<header class="section__header">
  <h2 class="page-title page-title--accent">
    @lang('products.menu')
  </h2>
  <nav class="catalog-nav">
    <ul class="catalog-nav__wrapper">
      <li class="catalog-nav__item">
        <button class="catalog-nav__btn is-active" type="button" data-filter="all">
          @lang('products.all')
        </button>
      </li>

      @foreach ($categories as $category )
      <li class="catalog-nav__item">
        <button class="catalog-nav__btn" type="button" data-filter="{{ $category->filter }}">
          {{ $category->getTranslatedAttribute('title', App::getLocale(), 'fallbackLocale') }}
        </button>
      </li>
      @endforeach        
      
    </ul>
  </nav >
</header>