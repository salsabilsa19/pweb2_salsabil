<!DOCTYPE html>
<html lang="en">
  <head>
      <title>@yield('title')</title>
      @include('layouts.includes.head')
      @include('layouts.includes.head-style')
      <meta name="csrf-token" content="{{ csrf_token() }}" />
  </head>
<body>

<body data-sidebar="dark">

<!-- Begin page -->
<div id="layout-wrapper">

    @include('layouts.includes.menu')

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

      <div class="page-content">
        <div class="container-fluid">
          @yield('content')
        </div> <!-- container-fluid -->
      </div>
      <!-- End Page-content -->

        @include('layouts.includes.footer')
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- JAVASCRIPT -->
@include('layouts.includes.vendor-scripts')
@yield('scripts')

<script src="{{asset('assets/admin/assets/js/app.js')}}"></script>
<script>
  function hitungtagihan() {
      var _bil2 = document.getElementById('sebelumnya').value;
      var _bil1 = document.getElementById('sekarang').value;
      _hasil = parseInt(_bil1) - parseInt(_bil2);

      var hasilAkhir;
        if (_hasil < 3000) {
          hasilAkhir = 10000;
        } else {
          hasilAkhir = _hasil * 3;
        }
    document.getElementById('hasil').value = hasilAkhir;
  }
</script>
</body>
</html>