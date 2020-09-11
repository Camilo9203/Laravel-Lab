<nav class="navbar sticky-top navbar-light bg-light navbar-expand-lg shadow-sm">
        {{-- Recoger datos  --}}
        {{-- {{ dump(request()->routeIs('about')) }} --}}
    <div class="container">
        
        <a class="navbar-brand" href="{{ route ('home') }}">
        
            {{ config('app.name') }}

        </a>
        {{-- Button toggler --}}
        <button class="navbar-toggler" type="button" 
            data-toggle="collapse" 
            data-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" 
            aria-expanded="false" 
            ria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        {{-- Links --}}
        <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent">
            <ul class="nav nav-pills nav-fill">
                <li class="nav-item"><a class="nav-link {{ setActive('home') }}" href="{{ route('home') }}">@lang('Home')</a></li>
                <li class="nav-item"><a class="nav-link {{ setActive('about') }}" href="{{ route ('about') }}">@lang('About')</a></li>
                <li class="nav-item"><a class="nav-link {{ setActive('projects.*') }}" href="{{ route ('projects.index') }}">@lang('Projects')</a></li>
                <li class="nav-item"><a class="nav-link {{ setActive('contact') }}" href="{{ route ('contact') }}">@lang('Contact')</a></li>
                @guest
                    
                    <li class="nav-item"><a class="nav-link {{ setActive('login') }}" href="{{ route ('login') }}">@lang('Login')</a></li>    
                
                @else 

                    <li class="nav-item">
                        <a class="nav-link {{ setActive('logout') }}" 
                            href="#" 
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                    
                            @lang ('Logout')
                        </a>
                    </li>
                
                @endguest
            </ul>
        </div>


    </div>
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
