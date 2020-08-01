<!-- Sidebar -->
<ul class="sidebar navbar-nav">
        <li class="nav-item {{ Request::path() === 'admin' ? 'active' : ''}}">
          <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>

        <li class="nav-item {{ Request::path() === 'admin/tournament' ? 'active' : ''}}">
          <a class="nav-link" href="{{ route('tournament.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Tournament</span>
          </a>
        </li>

        <li class="nav-item {{ Request::path() === 'admin/tournament-category' ? 'active' : ''}}">
          <a class="nav-link" href="{{ route('tournament-category.index') }}">
            <i class="fas fa-fw fa-tag"></i>
            <span>Tournament Category</span>
          </a>
        </li>

        <li class="nav-item {{ Request::path() === 'admin/team' ? 'active' : ''}}">
          <a class="nav-link" href="{{ route('team.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Team</span>
          </a>
        </li>

        <li class="nav-item {{ Request::path() === 'admin/player' ? 'active' : ''}}">
          <a class="nav-link" href="{{ route('player.index') }}">
            <i class="fas fa-fw fa-gamepad"></i>
            <span>Player</span>
          </a>
        </li>

        <li class="nav-item {{ Request::path() === 'admin/tanding' ? 'active' : ''}}">
          <a class="nav-link" href="{{ route('tanding.index') }}">
            <i class="fas fa-fw fa-cubes"></i>
            <span>Tanding</span>
          </a>
        </li>

        <li class="nav-item {{ Request::path() === 'admin/info' ? 'active' : ''}}">
          <a class="nav-link" href="{{ route('info.index') }}">
            <i class="fas fa-fw fa-info"></i>
            <span>Info</span>
          </a>
        </li>

        <li class="nav-item {{ Request::path() === 'admin/user' ? 'active' : ''}}">
          <a class="nav-link" href="#">
            <i class="fas fa-fw fa-user-circle"></i>
            <span>User</span>
          </a>
        </li>
       
       
      </ul>