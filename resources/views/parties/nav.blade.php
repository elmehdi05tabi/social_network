<nav>
    <div class="logo">
        <img src="{{ asset('logo.png') }}" alt="Logo" width="40" height="40">
    </div>
    <ul>
        <li>
            <a href="{{ route('publications.index') }}" class="nav-icon" data-tooltip="Home">
                <i class="fa-solid fa-house"></i>
            </a>
        </li>
        <li>
            <a href="{{ route('profiles.index') }}" class="nav-icon" data-tooltip="Profiles">
                <i class="fa-solid fa-users"></i>
            </a>
        </li>
        @guest
        <li>
            <a href="{{ route('profiles.create') }}" class="nav-icon" data-tooltip="Create Profile">
                <i class="fa-solid fa-user"></i>
            </a>
        </li>
        <li>
            <a href="{{ route('login.show') }}" class="nav-icon" data-tooltip="Login">
                <i class="fa-solid fa-right-to-bracket"></i>
            </a>
        </li>
        @endguest
    </ul>
    @auth
    <div class="profile-connection">
        <div class="dropdown">
            <button class="btn-profile">
                <a href="{{route('profiles.show',auth()->user()->id)}}">
                    <img src="{{ asset('storage/'.auth()->user()->image) }}" alt="User Profile">
                    
                </a>
            </button>
            <div class="dropdown-menu">
                <a href="{{ route('logout') }}" class="dropdown-item">
                    <i class="fa-solid fa-right-from-bracket"></i> LogOut
                </a>
            </div>
        </div>
    </div>
    @endauth
</nav>
