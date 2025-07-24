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
              <li class="nav-item {{ ($page == 'web') ? 'active' : "" }}">
                <a data-bs-toggle="collapse" href="#web">
                  <i class="fas fa-images"></i>
                  <p>Web Content</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="web">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{ route('admin.slider') }}" style="padding: 5px 24px !important">
                        
                        <p class="sub-item">Slider</p>
                      
                      </a>
                    </li>

                    <li>
                      <a href="{{ route('admin.management') }}" style="padding: 5px 24px !important">
                      
                        <p class="sub-item">Management</p>
                      </a>
                    </li>

                    @can('viewAny' ,Auth()->user()) 
                    <li class="nav-item" >
                      <a href="{{ route('admin.users') }}" style="padding: 5px 24px !important">
                       
                        <p class="sub-item">Users</p>
                        
                      </a>
                    </li>
                    @endcan
                  </ul>
                </div>
              </li>

              <li class="nav-item {{ ($page == 'product') ? 'active' : "" }}">
                <a data-bs-toggle="collapse" href="#productss">
                  <i class="fas fa-project-diagram"></i>
                  <p>Product</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="productss">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{ route('admin.category') }}" style="padding: 0px 24px !important">
                       
                        <p class="sub-item">Category</p>
                      
                      </a>
                    </li>

                    <li>
                      <a href="{{ route('admin.product') }}" style="padding: 5px 24px !important">
                        
                        <p class="sub-item">Product</p>
                      
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
              
              <li class="nav-item {{ ($page == 'gallery') ? 'active' : "" }}">
                <a data-bs-toggle="collapse" href="#sidebarLayouts">
                  <i class="fas fa-images"></i>
                  <p>Gallery</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="sidebarLayouts">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{ route('admin.photogallery') }}" style="padding: 5px 24px !important">
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
              
              <li class="nav-item {{ ($page=='area') ? 'active' : ''}}">
                <a href="{{ route('admin.area') }}">
                  <i class="fas fa-handshake"></i>
                  <p>Area</p>
                  <!-- <span class="badge badge-success">4</span> -->
                </a>
              </li>


              <li class="nav-item {{ ($page=='client') ? 'active' : ''}}">
                <a data-bs-toggle="collapse" href="#dealers">
                  <i class="fas fa-handshake"></i>
                  <p>Dealers</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="dealers">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{ route('admin.delear') }}" style="padding: 5px 24px !important">
                        <span class="sub-item">Approve Dealers</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('admin.p_delear') }}" style="padding: 5px 24px !important">
                        <span class="sub-item">Pending Dealers</span>
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