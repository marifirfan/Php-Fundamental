<?php  
if (isset($_POST["username"]) && isset($_POST["password"])) {
    if ($_POST["username"] == "admin" && $_POST["password"] == "admin") {
        header("Location: welcomeadnim.php");
        exit;
    } else {
        echo '<p style="color: red;">Username Dan Kata Sandi Salah !</p>';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body>
    <h1>Login Admin</h1>
    
    <form action="" method="post">
        <li>
            <label> Username : </label>
            <input type="text" name="username" id="1">
        </li>
        <br>
        <li>
        <label> Password : </label>
            <input type="password" name="password" id="2">
        </li>
        <br>
        <button type="submit" name="submit" >Login</button>
    </form>
</body>
</html>
