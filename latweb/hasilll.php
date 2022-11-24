


<?php
if ($result ->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_session['username']= $row['username'];
    header("location: berhasil_login.php");
} else {
    echo "<script>alert('email atua password anda salah.  silahkan coba lagi!')</script>";
}






if (mysqli_num_rows($results) == 1) { // user found
    // check if user is admin or user
    $logged_in_user = mysqli_fetch_assoc($results);
    if ($logged_in_user['user_type'] == 'admin') {

        $_SESSION['user'] = $logged_in_user;
        $_SESSION['success']  = "You are now logged in";
        header('location: admin/home.php');		  
    }else{
        $_SESSION['user'] = $logged_in_user;
        $_SESSION['success']  = "You are now logged in";

        header('location: index.php');
    }