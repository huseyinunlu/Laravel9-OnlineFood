<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="{{route('admin.index')}}"><img src="{{asset('assets')}}/admin/images/logo.svg" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="{{route('admin.index')}}"><img src="{{asset('assets')}}/admin/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="{{asset('assets')}}/admin/images/faces/face15.jpg" alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
                        <span>Gold Member</span>
                    </div>
                </div>
                <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-primary"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-onepassword  text-info"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-calendar-today text-success"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                        </div>
                    </a>
                </div>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-truck-delivery"></i>
              </span>
                <span class="menu-title">Orders</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{asset('assets')}}/admin/pages/ui-features/buttons.html">New Orders</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{asset('assets')}}/admin/pages/ui-features/dropdowns.html">Accepted Orders</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{asset('assets')}}/admin/pages/ui-features/typography.html">Shipping Orders</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{asset('assets')}}/admin/pages/ui-features/buttons.html">Completed Orders</a></li>

                </ul>
            </div>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="/admin/category">
              <span class="menu-icon">
                <i class="mdi mdi-collage"></i>
              </span>
                <span class="menu-title">Categories</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="/admin/products">
              <span class="menu-icon">
                <i class="mdi mdi-package-variant"></i>
              </span>
                <span class="menu-title">Products</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="/admin/pages/comments">
              <span class="menu-icon">
                <i class="mdi mdi-comment"></i>
              </span>
                <span class="menu-title">Comments</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="/admin/faq">
              <span class="menu-icon">
                <i class="mdi mdi-comment-question-outline"></i>
              </span>
                <span class="menu-title">FAQ</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a href="/admin/users" class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-account"></i>
              </span>
                <span class="menu-title">Users</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html">
              <span class="menu-icon">
                <i class="mdi mdi-thumb-up"></i>
              </span>
                <span class="menu-title">Social</span>
            </a>
        </li>
    </ul>
</nav>
