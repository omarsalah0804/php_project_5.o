>


<?php

include 'components/connect.php';



if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
};

if (isset($_POST['Login'])) {

    $email = $_POST['Loginemail'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $pass = sha1($_POST['Loginpassword']);
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);

    $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
    $select_user->execute([$email, $pass]);
    $row = $select_user->fetch(PDO::FETCH_ASSOC);

    if ($select_user->rowCount() > 0) {
        $_SESSION['user_id'] = $row['id'];
        header('location:home.php');
    } else {
        $message[] = 'incorrect username or password!';
    }
}

?>