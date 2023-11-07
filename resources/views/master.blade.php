<!-- Sidebar -->
@include('partials.sidebar');
<!-- End of Sidebar -->

<!-- Topbar -->
@include('partials.header');
<!-- End of Topbar -->

<!-- Begin Page Content -->
@yield('content');

{{-- footer --}}
@include('partials.footer');
