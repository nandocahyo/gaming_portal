<!-- Sidebar -->
<ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('tournament.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Tournament</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('tournament-category.index') }}">
            <i class="fas fa-fw fa-tag"></i>
            <span>Tournament Category</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('team.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Team</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('player.index') }}">
            <i class="fas fa-fw fa-gamepad"></i>
            <span>Player</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('tanding.index') }}">
            <i class="fas fa-fw fa-cubes"></i>
            <span>Tanding</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-fw fa-user-circle"></i>
            <span>User</span>
          </a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="login.html">Login</a>
            <a class="dropdown-item" href="register.html">Register</a>
            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item" href="404.html">404 Page</a>
            <a class="dropdown-item" href="blank.html">Blank Page</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
        </li>
      </ul>