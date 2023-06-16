<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Akdital</title>
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
                    <small class="py-2"><i class="far fa-clock text-primary me-2"></i>Horaires d'ouverture : Ouvert 24h/24, 7j/7</small>
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
        <!-- <img src="../../../public/assests/img/Logo-Akdital-FR-01.png" alt="main_logo"> -->
        <h2 style="color: #06A3DA;">AKDITAL</h2>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class=" navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="" class="nav-item nav-link active">Accueil</a>
                <a href="" class="nav-item nav-link">À propos</a>
                <a href="" class="nav-item nav-link">Services</a>
                <a href="" class="nav-item nav-link">Prendre rendez-vous</a>
                <a href="" class="nav-item nav-link">Doctors</a>
            </div>
            <button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
            @if(Route::has('login'))
            @auth
            <a href="{{url('myappointment')}}" class="btn btn-primary py-2 px-4 ms-3">My Appointment</a>
            <x-app-layout>
            </x-app-layout>
            @else
            <a href="{{route('login')}}" class="btn btn-primary py-2 px-4 ms-3">Se connecter</a>
            <a href="{{route('register')}}" class="btn btn-primary py-2 px-4 ms-3">S'inscrire</a>
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


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
    @if(session()->has('message'))
    
    <div id="alertContainer" class="alert alert-success">
                <button id="closeButton" type="button" class="close" data-dismiss="alert"></button>
                {{session()->get('message')}}
    </div>
@endif
        <div id="header-carousel" class="carousel slide carousel-fade" >
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="../assests/img/ITP-AKDITAL-HIA-6861-min-scaled.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Bienvenue à AKDITAL </h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Votre Santé est Notre Mission</h1>
                            <a href="appointment.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Prendre rendez-vous</a>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="../assests/img/ITP-HPC_-min-scaled.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Bienvenue à AKDITAL </h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Votre Santé est Notre Mission</h1>
                            <a href="appointment.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Prendre rendez-vous</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> -->
        </div>
    </div>
    <!-- Carousel End -->
    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">À propos </h5>
                        <h1 class="display-5 mb-0">Leader de la Santé Privée au Maroc </h1>
                    </div>
                    <h4 class="text-body fst-italic mb-4">Leader du secteur privé de la santé au Maroc, le Groupe AKDITAL place l'accessibilité aux soins au cœur de sa mission au Maroc.
À ce jour, il dispose d'un important réseau d'établissements de santé dans plusieurs villes du Royaume et prévoit d'autres ouvertures dans les années à venir.
La vision d'AKDITAL est de fournir aux patients les normes les plus élevées en termes de sécurité et de qualité, et d'offrir à son personnel et aux professionnels les opportunités et le cadre nécessaires à leur développement professionnel.</h4>
                    <div class="row g-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Équipe Professionnelle Primée</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Tarifs Équitables</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Ouvert 24h/24, 7j/7</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Technologie de Pointe</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="../assests/img/62517086dca4e_ITP-Akdital-by-Drone-0198-min-scaled-1.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    


    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 mb-5">
                <div class="col-lg-7">
                    <div class="section-title mb-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Nos Services</h5>
                        <h1 class="display-5 mb-0">Nous offrons des services hospitaliers de la plus haute qualité.</h1>
                    </div>
                </div>
            </div>
            <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-12">
                    <div class="row g-5">
                        <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.3s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="../assests/img/cardiologie-(personnalise).jpg" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Cardiologie</h5>
                            </div>
                        </div>
                        <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.3s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="../assests/img/media.jpg" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Pédiatrie</h5>
                            </div>
                        </div>
                        <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="../assests/img/gynecologie.jpg" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Gynécologie</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row g-5">
                        <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.3s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="../assests/img/banner_1156x500px_shutterstock_1866052180_patienten-1156x500.jpg" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Dermatologie</h5>
                            </div>
                        </div>
                        <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.3s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="../assests/img/AdobeStock_156731822.jpeg" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Orthopédie</h5>
                            </div>
                        </div>
                        <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="../assests/img/bv_dossier_ophtalmologie_2.0.jpg" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Ophtalmologie</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row g-5">
                        <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.3s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="../assests/img/11568736.jpeg" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Radiologie</h5>
                            </div>
                        </div>
                        <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.3s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="../assests/img/neurologie-(personnalise).jpg" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Neurologie</h5>
                            </div>
                        </div>
                        <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="../assests/img/Medecin-pneumologue-en-gants-de-protection-examinant-des-poumons.jpg" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Pneumologie</h5>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Service End -->
@include('user.appointment')
@include('user.doctor')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light py-5 wow fadeInUp" data-wow-delay="0.3s" style="margin-top: -45px;">
        <div class="container pt-5">
            <div class="row g-5 pt-4">
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Liens rapides</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Accueil</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>À propos</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Services</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Prendre rendez-vous</a>
                        <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Doctors</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Liens populaires</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Accueil</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>À propos</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Services</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Prendre rendez-vous</a>
                        <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Doctors</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Contactez-nous</h3>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>123 Casablanca </p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>direction@akdital.ma</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>0522 23 14 14</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Follow Us</h3>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-light py-4" style="background: #051225;">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-white border-bottom" href="#">Akdital</a></p>
                </div>
            </div>
        </div>
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