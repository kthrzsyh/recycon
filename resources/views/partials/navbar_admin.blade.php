<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
        <a class="navbar-brand" href="/admin">Recycon</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" aria-current="page"
                        href="/admin">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Products' ? 'active' : '' }}" aria-current="page"
                        href="/admin/product_home">Products</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-expanded="false">
                        Manage Item
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/admin/product">View Item</a>
                        <a class="dropdown-item" href="/admin/product/add">Add Item</a>
                        <a class="dropdown-item" href="/admin/category">View Category</a>
                        <a class="dropdown-item" href="/admin/category/add">Add Category</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-expanded="false">
                        Profile
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">change password</a>
                        <a class="dropdown-item" href="#">edit profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">username - role</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="btn btn-danger my-2 my-sm-0" href="#">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
