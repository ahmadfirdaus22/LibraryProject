<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= OOP\app\Core\Router::url("petugas") ?>">Petugas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= OOP\app\Core\Router::url("peminjam") ?>">Member</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= \OOP\app\Core\Router::url("buku") ?>">Book</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= \OOP\app\Core\Router::url("subs") ?>">Subscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= \OOP\app\Core\Router::url("member_trx") ?>">Member Transaction</a>
                </li>
                </ul>
                <ul>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img style="width: 40px;" src="<?= OOP\app\Core\Router::url("assets/image/53571.svg") ?>" alt="">
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#"><i class="fas da-user"></i>profile</a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                        <form action="<?= OOP\app\Core\Router::url("logout") ?>" method="POST" onclick="return confirm('Are you sure to logout?')">
                            <button ><i class="fas fa-sign-out-alt"></i>Logout</button>
                        </form>
                    </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
