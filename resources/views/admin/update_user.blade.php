<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
    @include('admin.css')
    <style type="text/css">
        label{
            display: inline-block;
            width: 200px;
        }
    </style>
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
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Patient</li>
          </ol>
          <h6 style="color: #06A3DA;"  class="font-weight-bolder mb-0">Modifier Patient</h6>
        </nav>
        <div class=" navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <x-app-layout>
    
            </x-app-layout>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-fluid py-4">
          <div class="row">
          @if(session()->has('message'))
    
    <div id="alertContainer" class="alert alert-success">
                <button id="closeButton" type="button" class="close" data-dismiss="alert"></button>
                {{session()->get('message')}}
    </div>
@endif
<div class="col-12">
              <div class="card mb-4">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Modifier Médecin</h3>
                  <p class="mb-0">Saisir les informations personnelles du médecin.</p>
                </div>
                <div class="card-body">
                <form action="{{url('edituser',$data->id)}}" method="POST" enctype="multipart/form-data">
                  @csrf
                    <label>Nom Complet</label>
                    <div class="mb-3">
                      <input type="text" class="form-control" value="{{$data->name}}" name="name" placeholder="" >
                    </div>
                    <label>Téléphone</label>
                    <div class="mb-3">
                      <input type="text" class="form-control" value="{{$data->phone}}" name="phone" placeholder="" >
                    </div>
                    <label>Email</label>
                    <div class="mb-3">
                      <input type="text" class="form-control" value="{{$data->email}}" name="email" placeholder="" >
                    </div>
                    <label>Adresse</label>
                    <div class="mb-3">
                      <input type="text" class="form-control" value="{{$data->address}}" name="address" placeholder="" >
                    </div>
                    <div class="text-center">
                    <input type="submit" style="background-color:#82d616; color:white" class="btn btn-success">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    
      </main>
  <!--   Core JS Files   -->
 @include('admin.script')
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
