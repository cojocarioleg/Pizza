<!DOCTYPE html>
<html lang="ru">
  @include('head')
<body>

<!-- header-page -->

@include('header')
<!-- /.header-page -->

<!-- section-top -->
@include('section-top')
<!-- /.section-top -->



<!-- section-catalog -->
<section class="section section-catalog">
  <div class="container">
    @include('categories', ['categories' => $categories])
    @include('catalog_products', ['categories' => $categories] )
   
  </div>
</section>
<!-- /.section-catalog -->

<!-- section-about -->
@include('section-about', ['abouts' => $abouts])
<!-- /.section-about -->

<!-- section-contacts -->
@include('contact')
<!-- /.section-contacts -->

<!-- footer-page -->
@include('footer')
<!-- /.footer-page -->

<!-- popup-menu -->
@include('popup-menu')
<!-- /.popup-menu -->

<!-- popup-order -->
@include('popup-order')
<!-- /.popup-order -->


  <script src="https://unpkg.com/focus-visible@5.0.2/dist/focus-visible.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.4.0/dist/lazyload.min.js"></script>

  <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>