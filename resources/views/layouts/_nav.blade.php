<aside class="main-sidebar sidebar-light-secondary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{Auth::user()->profile->image->url}}" class="img-circle elevation-2" alt="{{Auth::user()->name}}">
        </div>
        <div class="info">
          <a href="{{route('users.show', Auth::user())}}" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{route('users.index')}}" class="nav-link
              {!! active_class(route('users.index')) !!}
              ">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Usuarios
                </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('specialties.index')}}" class="nav-link
              {!! active_class(route('specialties.index')) !!}
              ">
                <i class="nav-icon fas fa-user-tag"></i>
                <p>
                  Especialidades
                </p>
            </a>
          </li>

          @if (auth()->user()->hasRole('Enfermera'))
          <li class="nav-item">
            <a href="{{route('enfermera.appointments', auth()->user())}}" class="nav-link
            {!! active_class(route('enfermera.appointments', auth()->user())) !!}
            ">
              <i class="nav-icon far fa-calendar-check"></i>
              <p>
                Mis citas
              </p>
            </a>
          </li>
          @else
          <li class="nav-item">
            <a href="{{route('all.appointments')}}" class="nav-link
            {!! active_class(route('all.appointments')) !!}
            ">
              <i class="nav-icon far fa-calendar-check"></i>
              <p>
                Citas programadas
              </p>
            </a>
          </li>
          @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
