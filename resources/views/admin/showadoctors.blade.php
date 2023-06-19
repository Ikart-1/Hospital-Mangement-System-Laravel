
<!DOCTYPE html>
<html lang="en">

<head>
@include('admin.css')
<!-- <link href="{{ asset('admin2/assets/pdf-styles.css') }}" rel="stylesheet"> -->
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
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li  class="breadcrumb-item text-sm text-dark active" aria-current="page">Médecins</li>
          </ol>
          <h6 style="color: #06A3DA;" class="font-weight-bolder mb-0">Liste Des Médecins</h6>
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
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer" aria-hidden="true"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer" aria-hidden="true"></i>
              </a>
              
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-2  d-flex align-items-center justify-content-between">
              <div class="p"><h6 >Médecins</h6></div>
              <div>
                 <li class="nav-item px-3 d-flex align-items-end">
                <a href="{{ route('download.doctors.pdf') }}" class="nav-link text-body p-0">
                    <i class="fa fa-download mr-2" aria-hidden="true"></i>Exporter Médecins
                </a>
            </li>
              </div>
              
            </div>

           

            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nom</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Téléphone</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Spécialité</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Numéro de chambre</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Photo</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Supprimer</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Modifier</th>
                     </tr>
                  </thead>
                  <tbody>
                  @foreach($data as $doctor)
                    <tr>
                      <td class="align-middle text-center text-sm">
                        <h6 class="mb-0 text-sm">{{$doctor->name}}</h6>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <h6 class="mb-0 text-sm">{{$doctor->phone}}</h6>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <h6 class="mb-0 text-sm">{{$doctor->specialty}}</h6>
                      </td>
                      <td class="align-middle text-center text-sm">
                      <h6 class="mb-0 text-sm">{{$doctor->room}}</h6>
                      </td>
                      <td class="align-middle text-center text-sm">
                      <img height="100" width="100" src="doctorimage/{{$doctor->image}}" alt="">
                      </td>
                      <td class="align-middle text-center text-sm">
                      <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce médecin ?')" class="btn btn-danger" href="{{url('deletedoctor',$doctor->id)}}">Supprimer</a>
                      </td>
                      <td class="align-middle text-center text-sm">
                      <a class="btn btn-primary" href="{{url('updatedoctor',$doctor->id)}}">Modifier</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
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
</body>

</html>