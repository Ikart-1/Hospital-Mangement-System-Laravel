
<!DOCTYPE html>
<html lang="en">

<head>
@include('admin.css')
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calendar</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>

<style>
  .navbar-vertical .navbar-nav>.nav-item .nav-link.active .icon {
    background-image: linear-gradient(310deg, #06A3DA 0%, #87CEEB 100%);

  }
  aside{
    background-image: linear-gradient(310deg, #2152ff 0%, #21d4fd 100%);
  }
</style>
<link rel="shortcut icon" href="assests/img/akdital2-02.png" type="image/x-icon"> 
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
 <script>
$(document).ready(function() {
  $('#calendar').fullCalendar({
    events: '/rendez-vous', // Utilisez l'URL de la route que vous avez définie

    // Options et configurations supplémentaires du calendrier
    // ...

    // Callback appelé lorsque les événements sont chargés
    eventRender: function(event, element) {
      // Personnalisez l'affichage des événements si nécessaire
      // Par exemple, vous pouvez ajouter une classe CSS à l'élément de l'événement
      // element.addClass('my-custom-class');
    }
  });
});

</script>

</body>

</html>