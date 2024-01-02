<!doctype html>
<html>

<head>
    <title>CodeIgniter Tutorial</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/bootstrap.css') ?>" />
    <script src="<?= base_url('js/bootstrap.bundle.js') ?>"></script>

</head>

<body>
    <div class="container">


        <header class="p-3 mb-3 border-bottom">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                            <use xlink:href="#bootstrap"></use>
                        </svg>
                    </a>

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="#" class="nav-link px-2 link-secondary">Startseite</a></li>
                        <li><a href="#" class="nav-link px-2 link-body-emphasis">Bestand</a></li>
                        <li><a href="#" class="nav-link px-2 link-body-emphasis">Wunschliste</a></li>
                        <li><a href="#" class="nav-link px-2 link-body-emphasis">Zufall</a></li>
                    </ul>

                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                        <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                    </form>

                    <div class="dropdown text-end">
                        <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu text-small">
                            <li><a class="dropdown-item" href="<?= base_url('admin') ?>">Admin</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?= base_url('logout') ?>">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>


        <?= view($page) ?>

        <footer>
            <em>&copy; <?= date('Y') ?></em>
        </footer>

    </div>
</body>

</html>