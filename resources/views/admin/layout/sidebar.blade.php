<div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="{{ route('admin') }}" class="logo">
              <img
                src="{{$company ? asset('storage/'.$company->logo) : asset('assets/admin/img/demoProfile.png') }}"
                alt="navbar brand"
                class="navbar-brand"
                height="20"
              />
              <!-- <span style="color:#fff;font-size:10px"></span> -->
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">

                <li class="nav-item {{ ($page=='home') ? 'active' : '' }}">
                <a href="/admin">
                  <i class="fas fa-home"></i>
                   <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item {{ ($page=='slider') ? "active" : '' }}">
                <a href="{{ route('admin.slider') }}">
                  <i class="fas fa-sliders-h"></i>
                  <p>Slider</p>
                 
                </a>
              </li>
              <li class="nav-item {{ ($page=='service') ? 'active' : "" }}">
                <a href="{{ route('admin.category') }}">
                  <i class="fas fa-concierge-bell"></i>
                  <p>Service</p>
                 
                </a>
              </li>

              <li class="nav-item {{ ($page == 'project') ? 'active' : '' }}">
                <a href="{{ route('admin.product') }}">
                  <i class="fas fa-project-diagram"></i>
                  <p>Project</p>
                 
                </a>
              </li>
              
              <li class="nav-item {{ ($page == 'gallery') ? 'active' : "" }}">
                <a data-bs-toggle="collapse" href="#sidebarLayouts">
                  <i class="fas fa-images"></i>
                  <p>Gallery</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="sidebarLayouts">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{ route('admin.photogallery') }}">
                        <span class="sub-item">Photo Gallery</span>
                      </a>
                    </li>
                    <!-- <li>
                      <a href="">
                        <span class="sub-item">Video Gallery</span>
                      </a>
                    </li> -->
                  </ul>
                </div>
              </li>
              
              <li class="nav-item {{ ($page == 'team') ? 'active' : "" }}">
                <a href="{{ route('admin.management') }}">
                  <i class="fas fa-users"></i>
                  <p>Management</p>
                </a>
              </li>

              <li class="nav-item {{ ($page=='client') ? 'active' : ''}}">
                <a href="{{ route('admin.client') }}">
                  <i class="fas fa-handshake"></i>
                  <p>Clients</p>
                  <!-- <span class="badge badge-success">4</span> -->
                </a>
              </li>

              @can('viewAny' ,Auth()->user()) 
              <li class="nav-item {{ ($page=='user') ? 'active' : '' }}">
                <a href="{{ route('admin.users') }}">
                   <i class="fas fa-user-friends"></i>
                  <p>Users</p>
                  
                </a>
              </li>
              @endcan
              
              <li class="nav-item {{ ($page=='company') ? 'active' : '' }}">
                <a href="{{ route('admin.company') }}">
                  <i class="fas fa-building"></i>
                  <p>Company</p>
                  
                </a>
              </li>
              <li class="nav-item {{ ($page=='about') ? 'active' : '' }}">
                <a href="{{ route('admin.about') }}">
                  <i class="fas fa-info-circle"></i>
                  <p>About Us</p>
                </a>
              </li>
              <li class="nav-item {{ ($page=='faq') ? 'active' : '' }}">
                <a href="{{ route('admin.faq') }}">
                  <i class="fas fa-info-circle"></i>
                  <p>Faq</p>
                </a>
              </li>
              <li class="nav-item {{ ($page=='contact') ? 'active' : '' }}">
                <a href="{{ route('admin.message') }}">
                  <i class="fas fa-envelope"></i>
                  <p>Contact</p>
                </a>
              </li>
              
            </ul>
          </div>
        </div>
      </div>