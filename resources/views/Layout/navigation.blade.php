{{-- Navbar --}}
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container">
        <div class="container-fluid">
            <ul class="navbar-nav nav-pills">
                {{-- Logo & Headphone DB --}}
                <img src="/gambar/logo.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill">
                <li>
                    <a class="nav-link text-light"><b>Headphone DB</b></a>
                </li>
                
                {{-- Brand --}}
                @if ($title == 'Brand')
                    <li><a class="nav-link active " href="/brand" style="background-color: white; color: black;">Brand</a></li>
                @else
                    <li><a class="nav-link" href="/brand">Brand</a></li>
                @endif

                {{-- Headphone --}}
                @if ($title == 'Headphone')
                    <li><a class="nav-link active" href="/headphone" style="background-color: white; color: black;">Headphone</a></li>
                @else
                    <li><a class="nav-link" href="/headphone">Headphone</a></li>
                @endif

            </ul>
        </div>
    </div>
</nav>
