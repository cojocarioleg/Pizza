<!DOCTYPE html>
<html lang="ru">
  @include('head')
<body>

<!-- header-page -->

@include('header')
<!-- /.header-page -->
        
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title">
                    @yield('message')
                </div>
            </div>
        </div>
        <!-- footer-page -->
@include('footer')
<!-- /.footer-page -->
    </body>
</html>
