<?php
require("./connection.php");
?>
<html>

<head>
    <title>Akatsuki</title>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="mycss.css">
    <link rel="stylesheet" href="fontawesome.com/all.css">
</head>

<body>
    <div class="login-form">
        <h2>ADMIN LOGIN PANEL</h2>
        <form method="POST">
            <div class="input-field">
                <input type="text" placeholder="Admin Name" name="AdminName">
            </div>
            <div class="input-field">
                <input type="password" placeholder="Password" name="AdminPassword">
            </div>
            <button type="submit" name="Signin">Sign In</button>

        </form>
    </div>
    <?php
    if (isset($_POST['Signin'])) {
        $query = "SELECT * FROM admin_login WHERE Admin_Name='$_POST[AdminName]' AND Admin_Password='$_POST[AdminPassword]' ";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) == 1) {
            session_start();
            $_SESSION['AdminLoginId'] = $_POST['AdminName'];
            header("location: admin_panel.php");
        } else {
            echo "<script>alert('Incorrect Password');</script>";
        }
    }
    ?>
</body>

</html>