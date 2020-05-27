<!DOCTYPE html>
<html lang="en" dir="ltr">
  @include('admin.partials.header')
  <body>
    @include('admin.partials.nav')
    @yield('content')
    @include('admin.partials.scripts')
    @include('admin.partials.footer')
  </body>
</html>
