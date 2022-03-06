<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Student Management') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('studentformjs/script.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- bootstrap 5 cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('studentformcss/style.css') }}" rel="stylesheet">

  
</head>
<body style="background: #74ebd5;
    background: linear-gradient(to right, #74ebd5, #ACB6E5);
    min-height: 100vh;">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Student Management') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @if(Auth::check())
                    <ul class="navbar-nav me-auto">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('student/form') }}">{{ __('Student') }}</a>
                                </li>   
                               
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('importExportView') }}">{{ __('Import Export') }}</a>
                                </li> 
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('userlist') }}">{{ __('User') }}</a>
                                </li> 
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('showemployee') }}">{{ __('Employee') }}</a>
                                </li> 
                               
                                
                    </ul>
                    @endif
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                        <li class="nav-item dropdown">
                                <a id="navbarDropdownLink" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{  __('Settings')  }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownLink">
                                   <a class="dropdown-item" href="{{ route('country/index') }}">
                                          {{ __('Country') }}
                                      </a>

                                      <a class="dropdown-item" href="{{ url('images/image') }}">
                                          {{ __('Multiple Images') }}
                                      </a>
                                      <a class="dropdown-item" href="{{ url('generate-qrcode') }}">
                                          {{ __('Qrcode') }}
                                      </a>
                                      <a class="dropdown-item" href="{{ url('mailform') }}">
                                          {{ __('Send Mail') }}
                                      </a>
                                      <a class="dropdown-item" href="{{ url('sendnotification') }}">
                                          {{ __('Send Notification') }}
                                      </a>
                                      <a class="dropdown-item" href="{{ url('posts') }}">
                                          {{ __('Spatie Multimedia') }}
                                      </a>
                                      <a class="dropdown-item" href="{{ url('product-list') }}">
                                          {{ __('Add to cart') }}
                                      </a>
                                </div>
                            </li> 

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
   <!-- style for table scrollbar -->
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- bootstrap 5 script link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    @yield('script')
<!-- Jquery cdn -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> -->
</body>
</html>
