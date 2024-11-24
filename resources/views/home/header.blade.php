<div class="header_main">
    <div class="mobile_menu">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo_mobile"><a href="{{route('home.index')}}"><img src="{{ asset('images/logo.png') }}" alt="Logo">
            </a></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home.index')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home.about')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home.service')}}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{route('home.blog')}}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{route('home.contact')}}">Contact</a>
                </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container-fluid">
        <div class="logo"><a href="{{route('home.index')}}"><img src="{{asset('images/logo.png')}}" style="margin:auto;"></a></div>
        <div class="menu_main">
            <ul>
                <li class="active"><a href="{{route('home.index')}}">Home</a></li>
                <li><a href="{{route('home.about')}}">About</a></li>
                <li><a href="{{route('home.blog')}}">Blog</a></li>
                @if (Route::has('login'))
                    @auth

                        <li>

                            <x-app-layout>
    
                            </x-app-layout>
                        </li>

                        <li><a href="{{route('home.my_post')}}">My Post</a></li>
                        <li><a href="{{route('home.create_post')}}">Create Post</a></li>
                    @else
                        <li><a href="{{route('login')}}">Login</a></li>
                        <li><a href="{{route('register')}}">Register</a></li>
                    @endauth
                @endif
            </ul>
        </div>
    </div>
</div>