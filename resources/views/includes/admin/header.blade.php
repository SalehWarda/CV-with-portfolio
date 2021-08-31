<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('admin.home') }}" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('admin.contact') }}" class="nav-link">Contact</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('admin.profileSettings')}}" class="nav-link">Setting</a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->

            <livewire:admin-header />

        <!-- Notifications Dropdown Menu -->

        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <img src="{{ auth('admin')->user()->photo }}"
                     class="user-image img-circle elevation-2" alt="User Image">
                <span class="d-none d-md-inline">{{ auth('admin')->user()->name }}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

                <!-- User image -->
                <li class="user-header bg-secondary">
                    <img src="{{ auth('admin')->user()->photo }}" class="img-circle elevation-2"
                         alt="User Image">

                    <p>
                        {{ auth('admin')->user()->name }} - {{$special->field_or_specialty}}
                        <small>Member since {{ auth('admin')->user()->created_at->format('Y-M') }}</small>
                    </p>
                </li>

                <!-- Menu Body -->


                <span class="dropdown-item dropdown-header"><i class="fas fa-cog mr-2"></i>Settings</span>
                <div class="dropdown-divider"></div>
                <a href="{{route('admin.profileSettings')}}" class="dropdown-item">
                    <i class="fas fa-users-cog mr-2"></i>Settings
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('admin.logout') }}" class="dropdown-item">
                    <i class="fas fa-sign-out-alt mr-2"></i>Logout
                </a>



            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
{{--        <li class="nav-item">--}}
{{--            <a href="{{ route('admin.logout') }}" class="btn btn-secondary">Logout</a>--}}
{{--        </li>--}}
    </ul>
</nav>
<!-- /.navbar -->
