<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http--equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Registration Form</title>
</head>

<body>
    <div class="form-container">
        <form action="" method="post">
            <h3> Register Now</h3>
            <input type="text" name="name" required placeholder="Enter your name">
            <input type="email" name="email" required placeholder="Enter your email id">
            <input type="password" name="password" required placeholder="Enter your password">
            <input type="password" name="cpassword" required placeholder="Confirm your password">
            <!-- <select name="user_type">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select> -->
            <input type="submit" name="submit" value="Register Now" class="form-btn" href="index.php">
            <p>Already have an account? <a href="login.php">Login</a></p>

        </form>
    </div>
</body>

</html>