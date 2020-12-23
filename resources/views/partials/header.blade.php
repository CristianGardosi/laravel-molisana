{{-- H E A D E R --}}
<header>
    <a class="brand" href="{{ route('home') }}">
         {{-- Asset -> ci porta dentro Public --}}
         <img src="{{asset('img/logo.png')}}" alt="Logo">
    </a>
    <nav class="navbar">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
                <h3>Home</h3>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('news') }}">
                <h3>Prodotti</h3>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('news') }}">
                <h3>Ricette</h3>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('news') }}">
                <h3>News</h3>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('news') }}">
                <h3>La nostra storia</h3>
            </a>
        </li>
    </nav>
</header>