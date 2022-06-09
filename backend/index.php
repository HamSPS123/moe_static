<?php
include($path."oop/obj.php");
if (!isset($_SESSION['username'])) {
    header("Location: ../logout");
}
?>

