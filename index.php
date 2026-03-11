<!DOCTYPE html>
<html>
<head>
<title>User Form</title>
</head>
<body>

<h2>User Form</h2>

<form method="post">
Name: <input type="text" name="name"><br><br>
Email: <input type="text" name="email"><br><br>
<input type="submit" name="submit">
</form>

<?php
include 'db.php';

if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];

$sql="INSERT INTO users(name,email) VALUES('$name','$email')";
$conn->query($sql);

echo "Data inserted successfully";
}
?>

</body>
</html>