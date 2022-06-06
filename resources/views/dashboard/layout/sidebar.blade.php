<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" aria-current="page" href="/home">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/orders') ? 'active' : '' }}" href="/dashboard/orders">
              <span data-feather="file" class="align-text-bottom"></span>
              Orders
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/reports') ? 'active' : '' }}" href="/dashboard/reports">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/profiles') ? 'active' : '' }}" href="/dashboard/profiles">
              <span data-feather="user" class="align-text-bottom"></span>
              Profile
            </a>
          </li>
        </ul>
      </div>
    </nav>