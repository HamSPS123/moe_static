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
            echo "window.location.href='backend';";
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
}

$obj = new obj();
