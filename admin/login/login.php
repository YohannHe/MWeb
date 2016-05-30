<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
session_start();
require_once '../config.php';
require_once '../funcitons.php';
connectDB();

define ('TOWARD_PAGE', '../index.php');
define ('BACKWARD_PAGE', 'index.html');

$username = $_POST['username'];
$password = $_POST['password'];
$regex = '/^[\w]{4,16}$/';

//echo "<script>{window.alert('" . $password . "');location.href = '" . BACKWARD_PAGE . "'}</script>";

if (preg_match($regex, $username) && preg_match($regex, $password)) {
    $sql = "SELECT * FROM admin WHERE admin_account = '$username' AND admin_password = '$password'";
    $result = $pdo->query($sql);

    if ($row = $result->fetch()) {
        $_SESSION['username'] = $username;
        header("Location: " . TOWARD_PAGE);
    }
}
$db = null;
echo "<script>{window.alert('账号或密码错误');location.href = '" . BACKWARD_PAGE . "'}</script>";
?>
