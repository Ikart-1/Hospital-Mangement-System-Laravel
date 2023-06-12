<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/soft-ui-dashboard/pages/dashboard.html " target="_blank">
        <img src="admin2/assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">AKDITAL</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class=" navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link  active" href="{{url('showadoctors')}}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa fa-stethoscope" style="font-size:17px; color:white"></i>
            </div>
            <span class="nav-link-text ms-1">Médecins</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  active" href="{{url('add_doctor_view')}}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa fa-plus-square" style="font-size:17px; color:white"></i>
               </div>
            <span class="nav-link-text ms-1">Ajouter Médecin</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  active" href="{{url('showappointment')}}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fas fa-calendar-alt" style="font-size:17px; color:white"></i>
            </div>
            <span class="nav-link-text ms-1">Rendez Vous</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link  active" href="{{url('add_appointment_view')}}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="	far fa-calendar-plus" style="font-size:17px; color:white"></i>
            </div>
            <span class="nav-link-text ms-1">Ajouter Rendez Vous</span>
          </a>
        </li>
      </ul>
    </div>
   
  </aside>