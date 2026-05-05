<html>
    <head>
        <title> ToDo List</title>
        <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <link href="{{asset('assets/fontawesome/css/all.min.css')}}" rel="stylesheet">
    </head>

    <body style="background:#9D9DCC">
        <nav class="navbar border-bottom border-body navbar-expand-lg" data-bs-theme="dark" style="background-color:#090933">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}"><b>ToDo</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active mx-4" aria-current="page" href="{{ route('dashboard1')}}"> Dashboard </a>
                        </li>
                    </ul>
                </div>
                <div class="d-flex justify-content-end mx-5">
                    <div class="collapse navbar-collapse" id="navbarAuth">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </a> 
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container">
            @yield('content')
        </div>
        
        <footer style="background-color:#090933" class="text-center text-white">
            <br>
            <p><b> FalaqSaleemProject@2026 </b></p>
            <br>
        </footer>

    </body>
</html>