<?php
include("config.php");
session_start();

$message = "";

if(isset($_POST['signup'])){

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$address = mysqli_real_escape_string($conn, $_POST['address']);

// Check if email already exists
$check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
if(mysqli_num_rows($check) > 0){
$message = "Email already registered!";
} else {

$query = "INSERT INTO users (name, email, password, phone, gender, address)
VALUES ('$name', '$email', '$password', '$phone', '$gender', '$address')";

if(mysqli_query($conn, $query)){
$message = "Registration successful! Please login.";
} else {
$message = "Error: " . mysqli_error($conn);
}
}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>
<link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>
<body>

<div class="auth-box">
<h2>Sign Up</h2>

<?php if($message != ""): ?>
<p style="color:red; text-align:center;"><?php echo $message; ?></p>
<?php endif; ?>

<form method="POST">

<input type="text" name="name" placeholder="Full Name" required>

<input type="email" name="email" placeholder="Email" required>

<input type="password" name="password" placeholder="Password" required>

<input type="text" name="phone" placeholder="Phone Number" required>

<select name="gender" required>
<option value="">Select Gender</option>
<option value="male">Male</option>
<option value="female">Female</option>
</select>

<textarea name="address" placeholder="Address" required></textarea>

<button type="submit" name="signup">Create Account</button>

<p class="switch-auth">
Already have an account? <a href="login.php">Login</a>
</p>

</form>
</div>

</body>
</html>