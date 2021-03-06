<nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/'.App::getLocale()) }}">
                RKSport
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/'.App::getLocale())}}">Начало</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{url('/'.App::getLocale().'/about')}}">За мен</a>
                    </li> --}}
                    @if(Auth::guest())
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/'.App::getLocale().'/gallery')}}">За мен</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/gallery')}}">Галерия</a>
                    </li>
                    @endif
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto pick-lang">
                    <!-- Authentication Links -->
                    @guest
                        {{-- <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li> --}}
                        <li><a href="/bg" title="BG"><img src="{{ asset('img/icons/bg-icon.png') }}" alt="BG"></a></li>
                        <li><a href="/en" title="EN"><img src="{{ asset('img/icons/gb-icon.png') }}" alt="EN"></a></li>
                        <li><a href="/it" title="IT"><img src="{{ asset('img/icons/it-icon.png') }}" alt="IT"></a></li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a href="/dashboard" class="dropdown-item">Администрация</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Изход') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>