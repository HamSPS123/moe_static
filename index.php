<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
</head>

<body>
    <header class="nav">
        <div class="container">
            <div class="nav-left">
                <img src="assets/images/logo.png" alt="" class="logo-img" />
            </div>
            <button type="button" class="btn btn-toggle">
                <span class="fas fa-bars"></span>
            </button>
            <div class="nav-center collape">
                <ul class="menu">
                    <li class="menu-item">
                        <a href="#" class="menu-link active">
                            <i class="fa fa-home"></i> ໜ້າຫຼັກ
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-link"><i class="fas fa-file-alt"></i> ກ່ຽວກັບ</a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-link"><i class="fas fa-newspaper"></i> ຂ່າວສານ</a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-link"><i class="fas fa-address-book"></i> ຕິດຕໍ່ພົວພັນ</a>
                    </li>
                </ul>
            </div>
            <div class="nav-right">
                <div class="dropdown">
                    <a class="dropdown-toggle menu-link" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        ເຂົ້າສູ່ລະບົບ
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">ແຜນແບ່ງປັນ</a></li>
                        <li><a class="dropdown-item" href="#">ຈັດການເອກະສານ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>