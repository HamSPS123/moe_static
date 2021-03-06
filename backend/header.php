<?php
include($path."oop/obj.php");
if (!isset($_SESSION['username'])) {
    header("Location: ../logout");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" href="<?= $path?>image/unnamed.gif">
    <title>MOE</title>
    <link rel="stylesheet" href="<?= $path?>plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= $path?>dist/all.min.css">
    <link rel="stylesheet" href="<?= $path?>dist/adminlte.min.css">
    <link rel="stylesheet" href="<?= $path?>dist/style.css">
    <link rel="stylesheet" href="<?= $path?>plugins/bootstrap-table/bootstrap-table.min.css">
    <script src="<?= $path?>dist/jquery.min.js"></script>
    <script src="<?= $path?>plugins/sweetalert/sweetalert.min.js"></script>

</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link"><?php echo $title; ?></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModalOut"><i class="fas fa-power-off text-danger"></i></a>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="<?= $path;?>user/admin/main" class="brand-link">
                <img src="<?= $path?>image/unnamed.gif" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Form Application</span>
            </a>
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                    <div class="info">
                        <a href="#" class="d-block"><?= $_SESSION["username"] ?></a>
                    </div>
                </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="management/employee" class="nav-link">
                                <i class="nav-icon fa fa-user"></i>
                                <p>
                                    ??????????????????????????????????????????????????????
                                </p>
                            </a>
                        </li>             
                    </ul>
                </nav>
            </div>
        </aside>



<form action="<?= $path ?>logout">
        <div class="modal fade" id="exampleModalOut" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">????????????????????????????????????????????????????????????</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" align="center">
                        ?????????????????????????????????????????????????????????????????? ????????? ????????? ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">?????????????????????</button>
                        <button type="submit" name="btnDelete" id="btnDelete" class="btn btn-outline-success ">
                            ??????????????????
                        </button>
                    </div>
                </div>
            </div>
        </div>
</form>