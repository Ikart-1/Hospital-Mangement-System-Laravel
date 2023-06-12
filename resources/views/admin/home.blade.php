
<!DOCTYPE html>
<html lang="en">

<head>
@include('admin.css')
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