<?php


$server = 'localhost';
$user = 'root';
$password = '';
$database = 'wms';
$conn= mysqli_connect($server,$user,$password,$database);

if (isset($_POST['username']) and isset($_POST['password']) ){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $loginas = $_POST['loginas'];

    $query = "SELECT * FROM logininfo WHERE username='$username' and password='$password'";

    $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
    $count= mysqli_num_rows($result);

    if ($count == 1){
        $_SESSION['username'] = $username;
    }else {
        header('Location: login_failed.php');
    }
    }
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
   header('Location: dashboard.php');
    echo "<a href='Logout.php'>Logout</a>";


}




// $username = $_POST['username'];
// $password = $_POST['password'];
// $loginas = $_POST['loginas'];

// $str = "insert into logininfo(username, password, loginas) values('$username', '$password', '$loginas')";
// $out = "select * from logininfo";
// $qny= mysqli_query($conn,$str);
// echo "$username $password";

// header("location:add_item.html");
// ?>
