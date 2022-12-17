<div class="popup popup-order">
  <div class="popup__wrapper">
    <div class="popup__inner">
      <div class="popup__content">
        <button class="btn-close popup__btn-close popup-close"></button>
        <h2 class="page-title popup__title">
          @lang('popup-order.complet')
        </h2>
        <p class="popup__subtitle popup__subtitle--order">
          @lang('popup-order.text')
        </p>
        <div class="order">
          <img class="order__img" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
          <h3 class="order__title">
            <span class="order-product-title"></span>
            <span class="order-product-price"></span> &#8381;
          </h3>
          <p class="order__size"></p>
          <form class="form form-send" method="POST" action="{{ route('order') }}" enctype="multipart/form-data" >
            @csrf
            <input class="order-info-title" type="hidden" name="pizza">
            <input class="order-info-price" type="hidden" name="price">
            <input class="order-info-size" type="hidden" name="size">
            <input class="form__input" type="text" name="name" placeholder="@lang('popup-order.name')" required>
            <input class="form__input" type="text" name="phone" placeholder="@lang('popup-order.phone')" required>
            <input class="form__input" type="text" name="adress" placeholder="@lang('popup-order.adress')" required>
            <select class="form__input" name="pay">
              <option value="Plată în numerar" >
                @lang('popup-order.csch')
              </option>
              <option value="Plată cu cardul">
                @lang('popup-order.cart')
              </option>
            </select>
            <button class="btn form__btn" type="submit">
              @lang('popup-order.order')
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>