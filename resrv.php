 <?php
$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "baraem";
$name=$_POST["Name"]; 
$phone=$_POST["phone"];
$date=$_POST["date"];
$time=$_POST["time"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO reserv (Name,phonenum,date,time) VALUES ('$name', '$phone', '$date','$time')";

if ($conn->query($sql) === TRUE) {
    echo "reservation successfull";
    header("location:index2.html");
    
} else {
    echo "reservation not successfull" . $sql . "<br>" . $conn->error;
}

$conn->close();
?>