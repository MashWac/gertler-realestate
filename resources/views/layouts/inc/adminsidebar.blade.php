<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" {{ url('dashboard') }}" target="_blank">
        <img src="/assets/staticimg/gertlerinvest.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Gertler Admin</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item  {{ \Illuminate\Support\Facades\Request::is('dashboard') ? 'active' : ''}}">
          <a class="nav-link text-white" href="{{ url('dashboard') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item  {{ \Illuminate\Support\Facades\Request::is('locations') ? 'active' : ''}}">
          <a class="nav-link text-white " href="{{ url('locations') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-location-crosshairs"></i>
            </div>
            <span class="nav-link-text ms-1">Locations</span>
          </a>
        </li>
        <li class="nav-item  {{ \Illuminate\Support\Facades\Request::is('uploads') ? 'active' : ''}}">
          <a class="nav-link text-white " href="{{ url('uploads') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-house"></i>
            </div>
            <span class="nav-link-text ms-1">House Uploads</span>
          </a>
        </li>
        <li class="nav-item  {{ \Illuminate\Support\Facades\Request::is('purchaserequests') ? 'active' : ''}}">
          <a class="nav-link text-white " href="{{ url('purchaserequests') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-money-bill"></i>
            </div>
            <span class="nav-link-text ms-1">Purchase Appointment</span>
          </a>
        </li>
        <li class="nav-item  {{ \Illuminate\Support\Facades\Request::is('rentalrequests') ? 'active' : ''}}">
          <a class="nav-link text-white " href="{{ url('rentalrequests') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Rent Appointment</span>
          </a>
        </li>
        <li class="nav-item  {{ \Illuminate\Support\Facades\Request::is('sellrequests') ? 'active' : ''}}">
          <a class="nav-link text-white " href="{{ url('sellrequests') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-regular fa-handshake"></i>
            </div>
            <span class="nav-link-text ms-1">Sell Request</span>
          </a>
        </li>
        <li class="nav-item  {{ \Illuminate\Support\Facades\Request::is('blogs') ? 'active' : ''}}">
          <a class="nav-link text-white " href="{{ url('blogs') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
            </div>
            <span class="nav-link-text ms-1">Blogs</span>
          </a>
        </li>
        <li class="nav-item  {{ \Illuminate\Support\Facades\Request::is('viewusers') ? 'active' : ''}}">
          <a class="nav-link text-white " href="{{ url('viewusers') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
            </div>
            <span class="nav-link-text ms-1">Admins</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>