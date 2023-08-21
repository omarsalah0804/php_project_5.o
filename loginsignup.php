<?php

include 'components/connect.php';
include 'login.php';
// include 'login.php';
session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
};

if (isset($_POST['singup'])) {

    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $number = $_POST['number'];
    $number = filter_var($number, FILTER_SANITIZE_STRING);
    $pass = sha1($_POST['pass']);
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);
    $cpass = sha1($_POST['cpass']);
    $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

    $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? OR number = ?");
    $select_user->execute([$email, $number]);
    $row = $select_user->fetch(PDO::FETCH_ASSOC);

    if ($select_user->rowCount() > 0) {
        $message[] = 'email or number already exists!';
    } else {
        if ($pass != $cpass) {
            $message[] = 'confirm password not matched!';
        } else {
            $insert_user = $conn->prepare("INSERT INTO `users`(name, email, number, password) VALUES(?,?,?,?)");
            $insert_user->execute([$name, $email, $number, $cpass]);
            $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
            $select_user->execute([$email, $pass]);
            $row = $select_user->fetch(PDO::FETCH_ASSOC);
            if ($select_user->rowCount() > 0) {
                $_SESSION['user_id'] = $row['id'];
                header('location:index.html');
            }
        }
    }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="./loginsignup.css">

</head>

<body>

    <div class="container" id="container">

        <div class="form-container sign-up-container">
            <div class="scrollable-form">
                <form class="sign-up-htm" action="" method="post" id="Formsignup">
                    <h1>Create Account</h1>


                    <div class="group">

                        <input placeholder="Your Name" id="fristname" required required pattern="[a-zA-Z]+" title=" alphabets characters only" type="text" class="input" name="name">
                    </div>

                    <div class="group">

                        <input placeholder="Username" id="Username" required type="text" class="input" name="fristname">
                    </div>



                    <div class="group">

                        <input placeholder="EmailAddress" id="EmailAddress" type="text" class="input" required name="email">
                        <p id="emailtex" class="hiden" style="font-weight: bold; position: sticky; font-size: 1.5vmin; color: red  ;">Email should be like this example@example.com</p>
                    </div>
                    <div class="group">

                        <input placeholder="phone number" id="EmailAddress" type="number" class="input" required name="number">
                        <p id="emailtex" class="hiden" style="font-weight: bold; position: sticky; font-size: 1.5vmin; color: red  ;">Email should be like this example@example.com</p>
                    </div>
                    <div class="group">

                        <input placeholder="password" id="Password" type="password" class="input" data-type="password" name="pass" required>
                        <p id="Passwordtex" class="hiden" style=" font-weight: bold; position: sticky; font-size: 1.5vmin; color: red  ;">Password must contain capital and small letters,numbers and a symbol</p>
                    </div>

                    <div class="group">

                        <input placeholder="confirmPassword" id="confirmPassword" type="password" class="input" data-type="password" required name="cpass">
                        <p id="ConfirmPasswordtex" class="hiden" style="font-weight: bold; position: sticky; font-size: 1.5vmin; color: red  ;">The two passwords doesn't match</p>
                    </div>
                    <div class="group">
                        <button type="submit" class="button" value="Submit" name="singup">sing-up </button>
                    </div>

                </form>
            </div>


        </div>
        <div class="form-container sign-in-container">
            <form action="" method="post">
                <h1>Login</h1>

                <span>or use your account</span>
                <input type="email" placeholder="Email" name='Loginemail' / required>
                <input type="password" placeholder="Password" name='Loginpassword' / required>

                <button name="Login">Login</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Login</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>



    <script src="register.js"></script>


</body>

</html>