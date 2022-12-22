<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success">
    <div class="container">
        <a class="navbar-brand" href="/">Recycon</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" aria-current="page"
                        href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Products' ? 'active' : '' }}" aria-current="page"
                        href="/products">Show Product</a>
                </li>

            </ul>
        </div>
        <div class="form-inline">
            <a class="btn btn-outline-light my-2 my-sm-0" href="/login">Login</a>
            <a class="btn btn-outline-light my-2 my-sm-0" href="/register">Register</a>
        </div>
    </div>
</nav>
