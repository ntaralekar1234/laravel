<header>
    <nav class="navbar navbar-expand-md navbar-light">
        <a class="navbar-brand" href="{{ url('superadmin/dashboard') }}">
        <img src="{{ asset('images/salon-logo-tr-wh.png') }}" >        
        </a>
        <span class="text-white head-salonname">Apex Super Admin Panel</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
            aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        <div id="navbarNavDropdown" class="navbar-collapse collapse justify-content-end">
            <ul class="navbar-nav navright-menu">
                <li class="dropdown dropdown-user nav-item bellset-item">
                    <a href="javascript:void(0);" data-toggle="dropdown" class="dropdown-toggle nav-item nav-link setting-menu">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-settings">
                            <circle cx="12" cy="12" r="3"></circle>
                            <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                        </svg>
                    </a>
                    
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-bx">
                        <a href="" class="dropdown-item"><i class="ft-user"></i>Permission Module</a>
                        <a href="" class="dropdown-item"><i class="ft-user"></i>Appointments</a>
                        <a href="" class="dropdown-item"><i class="ft-user"></i>General settings</a>
                        <a href="" class="dropdown-item"><i class="ft-user"></i>Notification settings</a>
                    </div>
                </li>
                <li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link" aria-expanded="false"><span class="avatar avatar-online">
                    <img src="{{ asset('images/avatar-s-1.png')}}" alt="avatar"><i></i></span>
                    <h6 class="user-name"> Super Admin</h6><i class="caret"></i></a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-bx">
                        <!-- <a href="#" class="dropdown-item"><i class="ft-user"></i>Profile</a> -->
                        <a href="javascript:void(0)" class="dropdown-item" data-toggle="modal" data-target="#edit_prof"><i class="ft-user"></i>Edit Profile</a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0)" class="dropdown-item" data-toggle="modal" data-target="#change_pass"><i class="ft-user"></i>Change Password</a>
                        <div class="dropdown-divider"></div>
                        <a href="" class="dropdown-item"><i class="ft-power"></i> Logout</a>
                    </div>
                </li>

            </ul>
        </div>
    </nav>
</header>