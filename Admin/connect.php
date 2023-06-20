<?php
$con = mysqli_connect("localhost", "root", "", "testing");
if (mysqli_connect_errno()) {
    die("Cannot connect to Database" . mysqli_connect_errno());
}
define("UPLOAD_SRC", $_SERVER['DOCUMENT_ROOT'] . "/testing/uploads/");

define("FETCH_SRC", "http://127.0.01.1/crud/uploads/");
