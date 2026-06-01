<!DOCTYPE html>
<html>
<head>
    <title>Mock Registration Form</title>
</head>
<body>

<h2>Registration Form</h2>

<form method="POST">
    <label>Name:</label><br>
    <input type="text" name="name"><br><br>

    <label>Email:</label><br>
    <input type="email" name="email"><br><br>

    <label>Role:</label><br>
    <select name="role">
        <option value="">Select Role</option>
        <option value="Student">Student</option>
        <option value="Teacher">Teacher</option>
        <option value="Admin">Admin</option>
    </select><br><br>

    <input type="submit" value="Register">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $role = $_POST["role"];

    if (empty($name) || empty($email) || empty($role)) {
        echo "<h3 style='color:red;'>All fields are required!</h3>";
    } else {
        echo "<h3 style='color:green;'>Registration Successful!</h3>";
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Role: " . $role;
    }
}
?>

</body>
</html>