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
    background-image: linear-gradient(310deg, #2152ff 0%, #21d4fd 100%);
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Médecin</li>
          </ol>
          <h6 style="color: #06A3DA;"  class="font-weight-bolder mb-0">Modifier Médecin</h6>
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
                <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">
                  @csrf
                    <label>Nom Complet</label>
                    <div class="mb-3">
                      <input type="text" class="form-control" value="{{$data->name}}" name="name" placeholder="" >
                    </div>
                    <label>Téléphone</label>
                    <div class="mb-3">
                      <input type="text" class="form-control" value="{{$data->phone}}" name="number" placeholder="" >
                    </div>
                    <label>Spécialité</label>
                    <div class="mb-3">
                    <select style="color: black; width:200px" name="speciality" id="" required>
                    <option value="{{$data->specialty}}">{{$data->specialty}}</option>
                    <option value="skin">skin</option>
                    <option value="heart">heart</option>
                    <option value="eye">eye</option>
                    <option value="nose">nose</option>
                    </select>
                    </div>
                    <label>Numéro du chambre</label>
                    <div class="mb-3">
                      <input type="text" class="form-control" value="{{$data->room}}" name="room" placeholder="" >
                    </div>
                    <label>Old Image</label>
                    <div class="mb-3">
                    <img  height="150" width="150" src="doctorimage/{{$data->image}}" alt="">
                    </div>
                    <label>Change Image</label>
                    <div class="mb-3">
                    <input type="file" name="file" id="">
                    </div>
                    <div class="text-center">
                    <input type="submit" style="background-color:#82d616; color:white" class="btn btn-success">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                AKDITAL
              </div>
            </div>

          </div>
        </div>
      </footer>
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
