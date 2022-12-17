<div class="catalog" id="pita">
      
  @foreach ($categories as $category)
    <div class="catalog__item" data-category="{{ $category->filter }}">
      @foreach ($category->products as $product )
        <div class="product catalog__product">
          <picture>
            <source type="image/webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" 
              data-srcset="{{Voyager::image($product->image_1)}}">
            <img class="product__img lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" 
              data-src="{{Voyager::image($product->image_2)}}" alt="">
          </picture>
          <div class="product__content">
            <h3 class="product__title">
              {{ $product->getTranslatedAttribute('name', App::getLocale(), 'fallbackLocale') }}
            </h3>
            <p class="product__description">
              {{ $product->getTranslatedAttribute('description', App::getLocale(), 'fallbackLocale') }}
            </p>
          </div>
          <footer class="product__footer">
            <div class="product__sizes">
              <button data-product-size-price="{{ $product->pizza_big }}" class="product__size is-active" type="button">
                @lang('products.big')
              </button>
              <button data-product-size-price="{{ $product->pizza_medium }}" class="product__size" type="button">
                @lang('products.medium')
              </button>
              <button data-product-size-price="{{ $product->pizza_smal }}" class="product__size" type="button">
                @lang('products.smal')
              </button>
            </div>
            <div class="product__bottom">
              <div class="product__price">
                <span class="product__price-value">{{ $product->pizza_big }}</span>
                <span class="product__currency">&#8381;</span>
              </div>
              <button class="btn product__btn" type="button" data-popup="popup-order">
                @lang('products.order')
              </button>
            </div>
          </footer>
        </div>
      @endforeach          
    </div>
  @endforeach

</div>