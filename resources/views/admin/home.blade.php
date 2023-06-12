
<!DOCTYPE html>
<html lang="en">

<head>
@include('admin.css')
<style>
  .navbar-vertical .navbar-nav>.nav-item .nav-link.active .icon {
    background-image: linear-gradient(310deg, #06A3DA 0%, #87CEEB 100%);

  }
  aside{
    background-image: linear-gradient(310deg, #06A3DA 0%, #87CEEB 100%);
  }
</style>
</head>

<body class="g-sidenav-show  bg-gray-100">
 @include('admin.sidebar')
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
   @include('admin.navbar')
    <!-- End Navbar -->
   @include('admin.body')
  </main>
  <!--   Core JS Files   -->
 @include('admin.script')
</body>

</html>