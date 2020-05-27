<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('partials.header')
    <body>
      @include('partials.nav')
      @yield('content')
      @include('partials.scripts')
    </body>
</html>
