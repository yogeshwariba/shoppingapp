<?php
session_start();
include("config.php");

$msg = "";

if(isset($_GET['msg']) && $_GET['msg'] == "login_required"){
$msg = "Please login first to continue.";
}

if(isset($_POST['login'])){

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = $_POST['password'];

$result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' LIMIT 1");

if(!$result){
$msg = "DB Error: " . mysqli_error($conn);
} else if(mysqli_num_rows($result) == 1){

$row = mysqli_fetch_assoc($result);

// IMPORTANT: hashed password check
if(password_verify($password, $row['password'])){
$_SESSION['user'] = $row['name'];
$_SESSION['user_email'] = $row['email']; // helpful later
header("Location: index.php");
exit;
} else {
$msg = "Invalid email or password!";
}

} else {
$msg = "Invalid email or password!";
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>
<body>

<div class="auth-box">
<h2>Login</h2>

<?php if($msg != ""): ?>
<p style="color:red; text-align:center; margin-bottom:10px;"><?php echo $msg; ?></p>
<?php endif; ?>

<form method="POST">
<input type="email" name="email" placeholder="Email" required value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
<input type="password" name="password" placeholder="Password" required>
<button type="submit" name="login">Login</button>

<p class="switch-auth">
Don't have an account? <a href="signup.php">Sign Up</a>
</p>
</form>
</div>

</body>
</html>