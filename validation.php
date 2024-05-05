

<?php
session_start();

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'vaccination');

$fullName = htmlspecialchars($_POST['fname']);
$Password = htmlspecialchars($_POST['psw']);


$s = "select * from parents where fname = BINARY '$fullName' && psw= BINARY '$Password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);


$parents_id = null;
$parents_name = null;

while ($row = $result->fetch_assoc()) {
    $parents_id = $row['id'];
    $parents_name = $row['fname'];
}


if ($num == 1) {
    $_SESSION['fname'] = $parents_name;
    $_SESSION['parents_id'] = $parents_id;

    header('location:dashboard.php');
} else {
    // header ('location: index.php');
    echo "<script>alert('Username or Password is incorrect');
    window.location.href='login.php';
</script>";
}


$con->close();
?>