<?php
session_start();
include('connect.php');
date_default_timezone_set("Asia/Bangkok");

class obj
{
    public $conn;

    public static function login($username, $password)
    {
        global $conn;
        global $user;
        $user = mysqli_query($conn, "call login('$username','$password');");
        if (mysqli_num_rows($user) > 0) {
            while ($row = mysqli_fetch_array($user)) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['loggedIn'] = TRUE;
            }

            // header("location: main");
        } else {
            echo "<script>";
            echo "window.location.href='?login=fail';";
            echo "</script>";
        }
        if ($_SESSION['loggedIn'] == TRUE) {
            echo "<script>";
            echo "window.location.href='backend/user';";
            echo "</script>";
        }
    }

    public static function user_select(){
        global $conn;
        global $user_select;
        $user_select = mysqli_query($conn,"call user_select();");
    }

    public static function user_insert($username,$password){
        global $conn;
        // $password = md5($password);

        $user_insert = mysqli_query($conn, "call user_insert('$username','$password')");
        if (!$user_insert) {
            echo"<script>";
            echo"window.location.href='user?msg=fail';";
            echo"</script>";
        }else{
            if(mysqli_num_rows($user_insert) > 0){
                $msg_row = mysqli_fetch_array($user_insert,MYSQLI_ASSOC);
                $msg = $msg_row['msg'];
                echo"<script>";
                echo"window.location.href='employee?msg=$msg';";
                echo"</script>";
            }
        }
    }
    
    public static function user_update($username_update,$password_update){
        global $conn;
        // $password = md5($password);

        $user_update = mysqli_query($conn, "call user_update('$username_update','$password_update')");
        if (!$user_update) {
            echo"<script>";
            echo"window.location.href='user?msg=fail';";
            echo"</script>";
        }else{
            if(mysqli_num_rows($user_update) > 0){
                $msg_row = mysqli_fetch_array($user_update,MYSQLI_ASSOC);
                $msg = $msg_row['msg'];
                echo"<script>";
                echo"window.location.href='employee?msg=$msg';";
                echo"</script>";
            }
        }
    }

    public static function document_select(){
        global $conn;
        global $document_select;
        $document_select = mysqli_query($conn,"call document_select();");
    }

    public static function document_insert($doc_type,$doc_title,$doc_description)
    {
        global $conn;
        global $path;

        $ext = pathinfo(basename($_FILES["photo"]["name"]), PATHINFO_EXTENSION);
        $new_image_name = date("Y-m-dh:i:sa").".".$ext;
        $image_path = $path."assets/images/";
        $upload_path = $image_path.$new_image_name;
        $Pro_image = $new_image_name;

        $uploadOk = 1;

        if (file_exists($upload_path)) {
            $uploadOk = 0;
            echo "<script>";
            echo "window.location.href='upload?same';";
            echo "</script>";   
        }
        if ($uploadOk == 0) {
            echo "<script>";
            echo "window.location.href='upload?fail';";
            echo "</script>";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["photo"]["tmp_name"], $upload_path)) {
                $result = mysqli_query($conn, "insert into document set doc_type='$doc_type', doc_title='$doc_title', doc_description='$doc_description', doc_image='$Pro_image';");
                if (!$result) {
                    echo "<script>";
                    echo "window.location.href='upload?error';";
                    echo "</script>";
                } else {
                    echo "<script>";
                    echo "window.location.href='upload?save';";
                    echo "</script>";
                }
            } else {
                echo "<script>";
                echo "window.location.href='upload?fail2';";
                echo "</script>";
            }
        }
    }

    public static function document_update($doc_type_update,$doc_title_update,$doc_description_update,$doc_id_update)
    {
        global $conn;
        global $path;

        $query = mysqli_query($conn, "SELECT doc_image FROM document WHERE doc_id='$doc_id_update'"); //ກວດສອບຮູບຖ້າຫາກມີການປ່ຽນແປງ
        $data = mysqli_fetch_array($query,MYSQLI_ASSOC);

        if($update_profile == ""){
            $Pro_image = $data['photo'];
        }else{
            $ext = pathinfo(basename($_FILES["photo4"]["name"]), PATHINFO_EXTENSION);
            $new_image_name = $formId_update.".".$ext;
            $image_path = $path."image/profile/";

            $path2 = $image_path.$data['photo'];
            if(file_exists($path2) && !empty($data['photo'])){
                unlink($path2);
            }

            $upload_path = $image_path.$new_image_name;
            move_uploaded_file($_FILES["photo4"]["tmp_name"], $upload_path);
            $Pro_image = $new_image_name;  
        }

        $uploadOk = 1;

        if (file_exists($upload_path)) {
            $uploadOk = 0;
            echo "<script>";
            echo "window.location.href='upload?same';";
            echo "</script>";   
        }
        if ($uploadOk == 0) {
            echo "<script>";
            echo "window.location.href='upload?fail';";
            echo "</script>";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["photo"]["tmp_name"], $upload_path)) {
                $result = mysqli_query($conn, "insert into document set doc_type='$doc_type', doc_title='$doc_title', doc_description='$doc_description', doc_image='$Pro_image';");
                if (!$result) {
                    echo "<script>";
                    echo "window.location.href='upload?error';";
                    echo "</script>";
                } else {
                    echo "<script>";
                    echo "window.location.href='upload?save';";
                    echo "</script>";
                }
            } else {
                echo "<script>";
                echo "window.location.href='upload?fail2';";
                echo "</script>";
            }
        }
    }
}

$obj = new obj();
