<?php include('inc/head.php');

define("BR", "<br><br><br>");

if (!is_dir($_GET["delete"])) {
    unlink($_GET["delete"]);
} else {
    rmdir($_GET["delete"]);
}

header("Location: index.php");

include('inc/foot.php'); ?>