
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
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Rendez Vous</li>
          </ol>
          <h6 style="color: #06A3DA;"  class="font-weight-bolder mb-0">Liste Des Rendez Vous</h6>
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
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Rendez - Vous</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Patient</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tel</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Medecin</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Message</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Statu</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Accepté</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Annulé</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($data as $appoint)
                    <tr>
                      <td class="align-middle text-center text-sm">
                        <h6 class="mb-0 text-sm">{{$appoint->name}}</h6>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <h6 class="mb-0 text-sm">{{$appoint->email}}</h6>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <h6 class="mb-0 text-sm">{{$appoint->phone}}</h6>
                      </td>
                      <td class="align-middle text-center text-sm">
                      <h6 class="mb-0 text-sm">{{$appoint->doctor}}</h6>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <h6 class="mb-0 text-sm">{{$appoint->date}}</h6>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <h6 class="mb-0 text-sm">{{$appoint->message}}</h6>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <h6 class="mb-0 text-sm">{{$appoint->status}}</h6>
                      </td>
                      <td class="align-middle text-center text-sm">
                      <a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approved</a>
                      </td>
                      <td class="align-middle text-center text-sm">
                      <a  class="btn btn-danger" href="{{url('canceled',$appoint->id)}}">Canceled</a>
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
    </div>
  </main>
  <!--   Core JS Files   -->
 @include('admin.script')
</body>

</html>