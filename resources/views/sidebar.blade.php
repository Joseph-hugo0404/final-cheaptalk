<div id="sidebar" class="active">
  <div class="sidebar-wrapper active">
      <div class="sidebar-header">
          <div class="d-flex justify-content-between">
              <div class="logo">
                  {{-- <a href="{{'/dashboard' }}"><img src="{{ URL::to('assets/images/logo/logo.png') }}" alt="Logo" srcset=""></a> --}}
              </div>
              <div class="toggler">
                  <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
              </div>
          </div>
      </div>
      <div class="sidebar-menu">
          <ul class="menu">
              <li class="sidebar-title">Menu</li>
              <li class="sidebar-item active">
                  <a href="{{ '/dashboard' }}" class='sidebar-link'>
                      <i class="bi bi-house-fill"></i>
                      <span>Dashboard</span>
                  </a>
              </li>
              <li class="sidebar-item">
                  <div class="card-body">
                      <div class="badges">
                        @role('admin')
                          <span>Name: <span class="fw-bolder">{{ Auth::user()->name }}</span></span>
                          <hr>
                          <span>Role Name:</span>
                          <span class="badge bg-success">Admin</span>
                          @endrole
                          @role('user')
                              <span>Name: <span class="fw-bolder">{{ Auth::user()->name }}</span></span>
                              <hr>
                              <span>Role Name:</span>
                              <span class="badge bg-info">User</span>
                          @endrole
                      </div>
                  </div>
              </li>

              {{-- <li class="sidebar-item">
                  <a href="{{ route('change/password') }}" class='sidebar-link'>
                      <i class="bi bi-shield-lock"></i>
                      <span>Chnage Password</span>
                  </a>
              </li> --}}

              @role('admin')
                  <li class="sidebar-title">Controller</li>
                  <li class="sidebar-item  has-sub">
                      <a href="#" class='sidebar-link'>
                          <i class="iconly-boldDocument"></i>
                          <span>Admin</span>
                      </a>
                      <ul class="submenu active">
                        <li class="submenu-item">
                            <a class="nav-link {{ 'admin/users' == request()->path() ? 'active' : '' }}"
                               href="{{ route('admin.users.index') }}"> <i class="fa-solid fa-users fa-fw me-3"></i><span>Users</span></a>
                            </li>

                            <li class="submenu-item">
                                <a class="nav-link {{ 'my-post' == request()->path() ? 'active' : '' }}"
                                    href='/my-post'> <i class="fa-solid fa-envelope fa-fw me-3"></i><span>My Posts</span></a>
                             </li>
                  
                             <li class="submenu-item">
                                    <a class="nav-link {{ '/log' == request()->path() ? 'active' : '' }}"
                                        href="{{ '/log' }}"><i class="fa-sharp fa-solid fa-address-card fa-fw me-3"></i><span>Logs</span></a>
                             </li>
                  
                             <li class="submenu-item">
                                        <a class="nav-link {{ 'admin/roles' == request()->path() ? 'active' : '' }}"
                                            href="{{ route('admin.roles.index') }}"> <i class="fa-duotone fa-book fa-fw me-3"></i><span>Roles</span></a>
                             </li>
                  
                                            <li class="submenu-item">
                  
                                            <a class="nav-link {{ 'admin/permissions' == request()->path() ? 'active' : '' }}"
                                                href="{{ route('admin.permissions.index') }}"> <i class="fa-solid fa-list fa-fw me-3"></i><span>Permissions</span></a>
                                            </li>
                      </ul>
                  </li>
              @endrole
              
              <li class="sidebar-title">Users Activity</li>
              <li class="sidebar-item  has-sub">
                  <a href="#" class='sidebar-link'>
                      <i class="bi bi-grid-1x2-fill"></i>
                      <span>View Record</span>
                  </a>
                  <ul class="submenu">
                      <li class="submenu-item">
                            <a class="nav-link {{ 'recent-post' == request()->path() ? 'active' : '' }}"
                              href="{{ '/recent-post' }}"
                            aria-current="true"
                          >
                            <i class="fas fa-envelope fa-fw me-3"></i><span>Posts</span>
                          </a>
                      </li>
                  </ul>
              </li>

              <li class="sidebar-item">
                  <a href="{{ ('/logout') }}" class='sidebar-link'>
                      <i class="fa-solid fa-right-from-bracket fa-fw me-3"></i>
                      <span>Log Out</span>
                  </a>
              </li>
          </ul>
      </div>
      <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
  </div>
</div>