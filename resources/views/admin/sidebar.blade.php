<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header mb-2">
      <i class="fas fa-times p-3 cursor-pointer opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav" style="color: #ffffff;"></i>
      <a class="navbar-brand m-0" href="" target="_blank">
        <!-- <img src="admin2/assets/img/Logo-Akdital-FR-01.png" class="navbar-brand-img h-100" alt="main_logo"> -->
        <img src="assests/img/akdital2-01.png"  style="min-height: 3.5rem;" alt="main_logo">
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class=" navbar-collapse  w-auto " style="height: 500px;" id="sidenav-collapse-main">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link  active" href="{{url('showadoctors')}}" >
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center" style=" background-image: linear-gradient(310deg, #2152ff 0%, #21d4fd 100%);">
            <i class="fa fa-stethoscope" style="font-size:17px; color:white"></i>
            </div>
            <span class="nav-link-text ms-1">Médecins</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  active" href="{{url('add_doctor_view')}}" >
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center" style=" background-image: linear-gradient(310deg, #2152ff 0%, #21d4fd 100%);">
            <i class="fa fa-plus-square" style="font-size:17px; color:white"></i>
               </div>
            <span class="nav-link-text ms-1">Ajouter Médecin</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  active" href="{{url('showappointment')}}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center" style=" background-image: linear-gradient(310deg, #2152ff 0%, #21d4fd 100%);">
            <i class="fas fa-calendar-alt" style="font-size:17px; color:white"></i>
            </div>
            <span class="nav-link-text ms-1">Rendez Vous</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link  active" href="{{url('add_appointment_view')}}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center" style=" background-image: linear-gradient(310deg, #2152ff 0%, #21d4fd 100%);">
            <i class="	far fa-calendar-plus" style="font-size:17px; color:white"></i>
            </div>
            <span class="nav-link-text ms-1">Ajouter Rendez Vous</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link  active" href="{{url('showuser')}}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center" style=" background-image: linear-gradient(310deg, #2152ff 0%, #21d4fd 100%);">
            <i class="fa fa-heartbeat" style="font-size:17px; color:white"></i>
            </div>
            <span class="nav-link-text ms-1">Patients</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link  active" href="{{url('add_user_view')}}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center" style=" background-image: linear-gradient(310deg, #2152ff 0%, #21d4fd 100%);" >
            <i class="fas fa-user-plus" style="font-size:17px; color:white"></i>
            </div>
            <span class="nav-link-text ms-1">Ajouter Patients</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link  active" href="{{url('showhisto')}}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center" style=" background-image: linear-gradient(310deg, #2152ff 0%, #21d4fd 100%);" >
            <i class="fa fa-history" style="font-size:17px; color:white"></i>
            </div>
            <span class="nav-link-text ms-1">Historique RDV </span>
          </a>
        </li>
        
      </ul>
    </div>
   
  </aside>