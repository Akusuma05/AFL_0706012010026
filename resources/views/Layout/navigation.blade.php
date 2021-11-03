{{-- Navbar --}}
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <ul class="navbar-nav">
            @if($title == "Brand")
            <li><a class="nav-link active" href="/brand">Brand</a></li>
            @else
            <li><a class="nav-link" href="/brand">Brand</a></li>
            @endif

            @if($title == "Headphone")
            <li><a class="nav-link active" href="/headphone">Headphone</a></li>
            @else
            <li><a class="nav-link" href="/headphone">Headphone</a></li>
            @endif
        </ul>
    </div>
</nav>

{{-- Footer --}}
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-bottom">
    
    <div class="mx-auto order-0">
        <a class="navbar-brand mx-auto">Ini footer</a>
    </div>
</nav>
