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


    <div class="container-fluid d-flex align-items-center justify-content-center vh-100">
        <div class="card w-50 w-sm-100 p-3">

            <div class="card-body">
                <h2 class="mb-5 text-center">ເຂົ້າສູ່ລະບົບ</h2>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">ຊື່ຜູ້ໃຊ້</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fas fa-user"></i>
                            </span>
                            <input type="text" class="form-control" id="username" name="username"
                                aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">ລະຫັດຜ່ານ</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fas fa-lock"></i>
                            </span>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">ເຂົ້າສູ່ລະບົບ</button>
                </form>
            </div>
        </div>
    </div>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>