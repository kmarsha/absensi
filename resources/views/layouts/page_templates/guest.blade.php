@include('layouts.navbars.navs.guest')
<div class="wrapper wrapper-full-page">
  <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('https://img.freepik.com/free-photo/modern-classroom-interior-light-tones_241146-108.jpg?w=740'); background-size: cover; background-position: center; align-items: center;" data-color="purple">
  <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
    @yield('content')
    {{-- @include('layouts.footers.guest') --}}
  </div>
</div>
