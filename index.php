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
    <header class="nav" id="myNav">
        <div class="container">
            <div class="nav-left">
                <img src="assets/images/logo.png" alt="" class="logo-img" />
            </div>
            <button type="button" class="btn btn-toggle">
                <span class="fas fa-bars"></span>
            </button>
            <div class="nav-center nav-toggle">
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
            <div class="nav-right nav-toggle">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle menu-link" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            ເຂົ້າສູ່ລະບົບ
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">ອັບໂຫຼດເອກະສານ</a></li>
                            <li><a class="dropdown-item" href="#">ແຜນແບ່ງປັນ</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <section class="hero-section">
        <img src="assets/images/banner.jpg" width="100%" alt="">
    </section>

    <section class="content-section">
        <div class="container">
            <h1 class="section-header">ແຈ້ງການ</h1>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card mx-auto" style="width: 80%;">
                        <img src="assets/images/unnamed.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="badge rounded-pill bg-info mb-2">ນິຕິກຳ</span>
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                <small class="text-muted">By Admin | <?= date("d/m/Y") ?></small>
                            </p>
                            <div class="d-flex justify-content-between">
                                <a href="#" class="btn-link text-success">ເບິ່ງລາຍລະອຽດ</a>
                                <a href="#" class="btn-download text-danger">ດາວໂຫຼດ PDF</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card mx-auto" style="width: 80%;">
                        <img src="assets/images/unnamed.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="badge rounded-pill bg-info mb-2">ນິຕິກຳ</span>
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                <small class="text-muted">By Admin | <?= date("d/m/Y") ?></small>
                            </p>
                            <div class="d-flex justify-content-between">
                                <a href="#" class="btn-link text-success">ເບິ່ງລາຍລະອຽດ</a>
                                <a href="#" class="btn-download text-danger">ດາວໂຫຼດ PDF</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card mx-auto" style="width: 80%;">
                        <img src="assets/images/unnamed.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="badge rounded-pill bg-info mb-2">ນິຕິກຳ</span>
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                <small class="text-muted">By Admin | <?= date("d/m/Y") ?></small>
                            </p>
                            <div class="d-flex justify-content-between">
                                <a href="#" class="btn-link text-success">ເບິ່ງລາຍລະອຽດ</a>
                                <a href="#" class="btn-download text-danger">ດາວໂຫຼດ PDF</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card mx-auto" style="width: 80%;">
                        <img src="assets/images/unnamed.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="badge rounded-pill bg-info mb-2">ນິຕິກຳ</span>
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                <small class="text-muted">By Admin | <?= date("d/m/Y") ?></small>
                            </p>
                            <div class="d-flex justify-content-between">
                                <a href="#" class="btn-link text-success">ເບິ່ງລາຍລະອຽດ</a>
                                <a href="#" class="btn-download text-danger">ດາວໂຫຼດ PDF</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card mx-auto" style="width: 80%;">
                        <img src="assets/images/unnamed.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="badge rounded-pill bg-info mb-2">ນິຕິກຳ</span>
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                <small class="text-muted">By Admin | <?= date("d/m/Y") ?></small>
                            </p>
                            <div class="d-flex justify-content-between">
                                <a href="#" class="btn-link text-success">ເບິ່ງລາຍລະອຽດ</a>
                                <a href="#" class="btn-download text-danger">ດາວໂຫຼດ PDF</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card mx-auto" style="width: 80%;">
                        <img src="assets/images/unnamed.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="badge rounded-pill bg-info mb-2">ນິຕິກຳ</span>
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                <small class="text-muted">By Admin | <?= date("d/m/Y") ?></small>
                            </p>
                            <div class="d-flex justify-content-between">
                                <a href="#" class="btn-link text-success">ເບິ່ງລາຍລະອຽດ</a>
                                <a href="#" class="btn-download text-danger">ດາວໂຫຼດ PDF</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mx-auto">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row pt-5 pb-2">
                <div class="col-md-4 text-center">
                    <img src="assets/images/logo.png" class="img-footer" alt="">
                    <p class="img-caption mt-2">ກະຊວງສຶກສາທິການ ແລະ ກິລາ<br>
                        ກົມແຜນການ<br>
                        ຫ້ອງການພັດທະນາຊັບພະຍາກອນມະນຸດ</p>
                </div>
                <div class="col-md-4">
                    <h2 class="footer-header">ເມນູ</h2>
                    <ul class="footer-menu">
                        <li><a href="#">ໜ້າຫຼັກ</a></li>
                        <li><a href="#">ກ່ຽວກັບ</a></li>
                        <li><a href="#">ຂ່າວສານ</a></li>
                        <li><a href="#">ຕິດຕໍ່ພົວພັນ</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h2 class="footer-header">ຂໍ້ມູນຕິດຕໍ່</h2>
                    <p class="desc mt-3"><b>ສະຖານທີ່:</b> ຖະໜົມເສດຖາທິລາດ, ບ້ານຊຽງຢືນ, ເມື່ອງຈັນທະບູລີ, ນະຄອນຫຼວງວຽງຈັນ,
                        ສ.ປ.ປ.ລາວ.</p>
                    <p class="desc"><b>ເບີໂທ:</b> +856 20 28 240 541</p>
                    <p class="desc"><b>ອີເມວ:</b> hrd@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="bottom-bar">
            <div class="container">
                <div>
                    © 2022, ກົມແຜນການ, ຫ້ອງການພັດທະນາຊັບພະຍາກອນມະນຸດ
                </div>
                <div></div>
            </div>
        </div>
    </footer>


    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>