<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">laravelApp</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" 
                aria-expanded="false" 
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @if(!empty($halaman) && $halaman == 'warga')
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('warga') }}">Warga
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('warga') }}">Warga</a>
                    </li>
                @endif

                @if(!empty($halaman) && $halaman == 'about')
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('about') }}">About 
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('about') }}">About</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
