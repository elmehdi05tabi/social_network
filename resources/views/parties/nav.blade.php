<nav>
    <ul>
        <li><a href="{{route('publications.index')}}">Publication</a></li>
        @auth
        <li><a href="{{route('publications.create')}}">Create Publication</a></li>
        @endauth
        <li><a href="{{route('profiles.index')}}">Profiles</a></li>
        @guest
        <li><a href="{{route('profiles.create')}}">Create Profile</a></li>
        <li><a href="{{route('login.show')}}">Login</a></li>
        @endguest
    </ul>
    @auth 
    <div class="profile-connection">
        <div class="dropdown">
            <button
            class="btn btn-outline-primary dropdown-toggle"
            type="button"
            id="triggerId"
            data-bs-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
            >
            {{auth()->user()->first_name." ".auth()->user()->last_name}}
        </button>
        <div class="dropdown-menu" aria-labelledby="triggerId">
            <a class="dropdown-item text-danger" href="{{route('logout')}}">Logout</a>
        </div>
    </div>
    @endauth
    </div>
    </nav>