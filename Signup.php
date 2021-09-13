<html>
    <title>sign up</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
<button type="button" onclick="parent.location='index.html'" class="button">back home</button>
</html>
<?php
$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "baraem";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 if(isset($_POST['Name'])){
        $name = $_POST['Name'];
        $pass = $_POST['pass'];
$sql = "INSERT INTO users (username,password) VALUES ('$name', '$pass')";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "Sign up successful please go back to home and log in";
}
    else
    {
    echo "Sign up failed try to sign up again" ;
    }
 }
 
$conn->close();
?>