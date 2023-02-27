<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "testing");
if (mysqli_connect_error()) {
    echo "<script>
    alert('Cannot connect to database')
            alert('Item Removed');
            window.location.href='mycart.php';
            </script>";
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_SESSION['purchase'])) {
        echo "Done";
    }
}
