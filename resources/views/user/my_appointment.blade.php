<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DentCare - Dental Clinic Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="../assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../assests/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../assests/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../assests/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="../assests/lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../assests/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../assests/css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small class="py-2"><i class="far fa-clock text-primary me-2"></i>Opening Hours: Mon - Tues : 6.00 am - 10.00 pm, Sunday Closed </small>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-envelope-open me-2"></i>direction@akdital.ma</p>
                    </div>
                    <div class="py-2">
                        <p class="m-0"><i class="fa fa-phone-alt me-2"></i>0522 23 14 14</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="index.html" class="navbar-brand p-0">
            <h1 class="m-0 text-primary"><i class="fa fa-tooth me-2"></i>DentCare</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class=" navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About Us</a>
                <a href="service.html" class="nav-item nav-link">Doctors</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">News</a>
                    <div class="dropdown-menu m-0">
                        <a href="price.html" class="dropdown-item">Pricing Plan</a>
                        <a href="team.html" class="dropdown-item">Our Dentist</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="appointment.html" class="dropdown-item">Appointment</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
            @if(Route::has('login'))
            @auth
            <a href="{{url('myappointment')}}" class="btn btn-primary py-2 px-4 ms-3">My Appointment</a>
            <x-app-layout>
            </x-app-layout>
            @else
            <a href="{{route('login')}}" class="btn btn-primary py-2 px-4 ms-3">Login</a>
            <a href="{{route('register')}}" class="btn btn-primary py-2 px-4 ms-3">Register</a>
            @endauth
            @endif
        </div>
    </nav>
    <!-- Navbar End -->
    


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->
   <div align="center" style="padding: 70px;">
    <table>
        <tr style="background-color:#06A3DA;" align="center">
            <th style="padding:10px; font-size:20px; color:white;">Doctor Name</th>
            <th style="padding:10px; font-size:20px; color:white;">Date</th>
            <th style="padding:10px; font-size:20px; color:white;">Message</th>
            <th style="padding:10px; font-size:20px; color:white;">Status</th>
            <th style="padding:10px; font-size:20px; color:white;">Reponse</th>
            <th style="padding:10px; font-size:20px; color:white;">Cancel Appointment</th>
        </tr>
        @foreach($appoint->reverse() as $appoints)
        <tr style="background-color: black;" align="center">
            <td style="padding:10px; font-size:20px; color:white;">{{$appoints->doctor}}</td>
            <td style="padding:10px; font-size:20px; color:white;">{{$appoints->date}}</td>
            <td style="padding:10px; font-size:20px; color:white;">{{$appoints->message}}</td>
            <td style="padding:10px; font-size:20px; color:white;">{{$appoints->status}}</td>
            <td style="padding:10px; background-color:green; font-size:20px; color:white;">{{$appoints->reponse}}</td>
            <td><a class="btn btn-danger" onclick="return confirm('are you sure to delete this')" href="{{url('cancel_appoint',$appoints->id)}}">Cancel</a></td>
        </tr>
        @endforeach
    </table>
   </div>


    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assests/lib/wow/wow.min.js"></script>
    <script src="../assests/lib/easing/easing.min.js"></script>
    <script src="../assests/lib/waypoints/waypoints.min.js"></script>
    <script src="../assests/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../assests/lib/tempusdominus/js/moment.min.js"></script>
    <script src="../assests/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../assests/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="../assests/lib/twentytwenty/jquery.event.move.js"></script>
    <script src="../assests/lib/twentytwenty/jquery.twentytwenty.js"></script>

    <!-- Template Javascript -->
    <script src="../assests/js/main.js"></script>
    <script>
    // Récupérer l'élément de l'alerte
    var alerte = document.getElementById('alertContainer');
    
    // Récupérer le bouton de fermeture
    var closeButton = document.getElementById('closeButton');
    
    // Supprimer l'alerte après 2 secondes
    setTimeout(function() {
        alerte.remove();
    }, 3000);
    
    // Gérer la fermeture manuelle de l'alerte en cliquant sur le bouton de fermeture
    closeButton.addEventListener('click', function() {
        alerte.remove();
    });
</script>
</body>

</html>