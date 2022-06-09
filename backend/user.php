<?php
$title = "ຈັດການຂໍ້ມູນພະນັກງານ";
$path = "../";
include('header.php');

?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div style="width: 100%;">
                        <div style="width: 46%; float: right;" align="right">

                            <form action="user" id="insertForm" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                                <div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">ເພີ່ມຂໍ້ມູນຜູ້ໃຊ້</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span a ria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row" align="left">
                                                    <div class="col-md-12 col-sm-6 ">
                                                        <label>ຊື່ຜູ້ໃຊ້</label>
                                                        <input type="text" name="username" id="username" placeholder="ຊື່ຜູ້ໃຊ້" class="form-control" required>
                                                        <div class="invalid-feedback">
                                                            ກະລຸນາປ້ອນຊື່ຜູ້ໃຊ້
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-6 ">
                                                        <label>ລະຫັດຜ່ານ</label>
                                                        <input type="password" name="password" id="password" placeholder="ລະຫັດຜ່ານ" class="form-control" required>
                                                        <div class="invalid-feedback">
                                                            ກະລຸນາປ້ອນລະຫັດຜ່ານ
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
                                                <button type="submit" name="Save" id="Save" class="btn btn-outline-primary" onclick="">
                                                    ບັນທຶກ
                                                    <span class="" id="load_insert"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

                <form action="user" id="update_form" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">ແກ້ໄຂຂໍ້ມູນຜູ້ໃຊ້ </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span a ria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row" align="left">
                                        <div class="col-md-12 col-sm-6 ">
                                            <label>ຊື່ຜູ້ໃຊ້</label>
                                            <input type="hidden" name="user_id_update" id="user_id_update">
                                            <input type="text" name="username_update" id="username_update" placeholder="ຊື່ຜູ້ໃຊ້" class="form-control" required>
                                            <div class="invalid-feedback">
                                                ກະລຸນາປ້ອນຊື່ຜູ້ໃຊ້
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-6 ">
                                            <label>ລະຫັດຜ່ານ</label>
                                            <input type="password" name="password_update" id="password_update" placeholder="ລະຫັດຜ່ານ" class="form-control" required>
                                            <div class="invalid-feedback">
                                                ກະລຸນາປ້ອນລະຫັດຜ່ານ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
                                    <button type="submit" name="update" id="update" class="btn btn-outline-success" onclick="">
                                        ແກ້ໄຂ
                                        <span class="" id="load_insert"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <!-- <div class="clearfix"></div><br> -->
                <?php
                $obj->user_select();
                ?>

                <div class="table-responsive">
                    <div class="row">
                        <div class="col-md-8 mt-2">
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalDelete"><i class="fa fa-trash"></i> ລົບ</button>
                            <button type="button" data-toggle="modal" data-target="#insertModal" class="btn btn-success">ເພີ່ມຂໍ້ມູນ</button>
                        </div>
                        <div class="col-md-4 mt-2">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="inCus" placeholder="ຄົ້ນຫາ">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-success" type="button"><i class="fas fa-search"></i></button>
                                </div>
                                &nbsp; &nbsp;
                            </div>
                        </div>
                    </div>
                    <form method="post" action="employee">
                        <table id="table" data-search-selector="#inCus" data-pagination="true" data-custom-search="customSearch" data-search="true" data-click-to-select="true" data-resizable="true" data-id-field="id" data-page-list="[10, 25, 50, 100, all]" data-search-highlight="true">
                            <thead>
                                <tr class="table-primary">
                                    <th data-field="state" data-checkbox="true"></th>
                                    <th>ແກ້ໄຂ</th>
                                    <th data-field="id" data-sortable="true">ລະຫັດຜູ້ໃຊ້</th>
                                    <th data-field="username" data-sortable="true">ຊື່ຜູ້ໃຊ້</th>
                                    <th data-field="password" data-sortable="true">ລະຫັດຜ່ານ</th>
                                </tr>
                            </thead>
                            <?php
                            while ($row = mysqli_fetch_array($user_select)) {
                            ?>
                                <tr>
                                    <td></td>
                                    <td class="text-center">
                                        <a href="#" class="fa fa-pen toolcolor btnUpdate"></a>
                                    </td>
                                    <td><?= $row["user_id"] ?></td>
                                    <td><?= $row["username"] ?></td>
                                    <td>
                                        <div style="white-space: nowrap; width: 50px; overflow: hidden;text-overflow: ellipsis;"><?= $row["pass"] ?></div>
                                    </td>
                                </tr>
                            <?php
                            }
                            mysqli_free_result($user_select);
                            mysqli_next_result($conn);
                            ?>
                        </table>
                        <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">ຢືນຢັນການລົບຂໍ້ມູນ</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" align="center">
                                        ທ່ານຕ້ອງການລົບຂໍ້ມູນ ຫຼື ບໍ່ ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
                                        <button type="submit" name="btnDelete_many" class="btn btn-outline-danger">ລົບ</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div><!-- /.content -->
</div><!-- /.content-wrapper -->




<?php
include($path . 'footer.php');
?>


<?php

if (isset($_POST["Save"])) {
    $obj->user_insert(trim($_POST['username']), trim($_POST['password']));
}

if (isset($_POST["update"])) {
    $obj->user_update(trim($_POST['username_update']), trim($_POST['password_update']), trim($_POST['user_id_update']));
}

if (isset($_POST['btnDelete_many'])) {
    $logic = 0;

    if (isset($_POST["btSelectItem"])) {
        // foreach ($_POST["btSelectItem"] as $checkid) {
        //     $check_app = mysqli_query($conn, "SELECT * FROM `application` WHERE emp_id = '$checkid'"); //ກວດສອບວ່າລະຫັ້ນນີ້ເຄີຍນຳໃຊ້ຫຼືຍັງ
        //     if (mysqli_num_rows($check_app) > 0) {
        //         $logic = 1;
        //         echo "<script>";
        //         echo "window.location.href='employee?msg=true&&emp=$checkid';";
        //         echo "</script>";
        //         break;
        //     }
        // }
        if ($logic == 0) {
            $delete = 0;
            foreach ($_POST["btSelectItem"] as $id) {

                $delete_many = mysqli_query($conn, "call user_delete($id)");
                if (!$delete_many) {
                    $delete = 1;
                    echo "<script>";
                    echo "window.location.href='employee?msg=fail';";
                    echo "</script>";
                }
                mysqli_free_result($delete_many);
                mysqli_next_result($conn);
            }
            if ($delete == 0) {
                echo "<script>";
                echo "window.location.href='employee?msg=success';";
                echo "</script>";
            }
        }
    } else {
        echo "<script>";
        echo "window.location.href='employee?msg=null';";
        echo "</script>";
    }
}
if (isset($_GET['msg'])) {
    if ($_GET['msg'] == "success") {
        echo '<script>swal("","ສຳເລັດ","success")</script>';
    }
    if ($_GET['msg'] == "fail") {
        echo '<script>swal("","ຜິດພາດ","error")</script>';
    }
    if ($_GET['msg'] == "same-user") {
        echo '<script>swal("","ອີເມວນີ້ມີແລ້ວ ກະລຸນາລອງໃໝ່","info")</script>';
    }
    if ($_GET['msg'] == "null") {
        echo '<script>swal("","ກະລຸນາເລືອກຂໍ້ມູນທີ່ຕ້ອງການລົບ","info")</script>';
    }
}
?>
<script>
    $(function() {
        $('#table').bootstrapTable();
    });

    function customSearch(data, text) {
        return data.filter(function(row) {
            return row.id.indexOf(text) > -1 || row.name.indexOf(text) > -1 || row.surname.indexOf(text) > -1 || row.location.indexOf(text) > -1 || row.email.indexOf(text) > -1 || row.stt.indexOf(text) > -1
        })
    }
</script>

<script>
    $(document).on("click", ".btnUpdate", function() {

        $('#updateModal').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        console.log(data);

        $('#username_update').val(data[3]);
        $('#password_update').val(data[4]);
        $('#user_id_update').val(data[2]);

    });
</script>