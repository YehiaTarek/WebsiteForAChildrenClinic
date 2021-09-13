
<html>

<head> 
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 25%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

    .button1 {
  background-color: aquamarine;
  border: none;
border-radius: 25px;
  color: white;
        margin: 10px;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
      cursor: pointer;
    position:absolute;
}
.button1:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
        .button2 {
  background-color: aquamarine;
  border: none;
border-radius: 25px;
  color: white;
        margin: 10px;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
      cursor: pointer;
    position:relative;
}
.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
</head>
<body>
 <form action = "" method = "post"  >
                  <label>Name  :</label><input type = "text" name = "Name" class = "box" required/><br /><br />
                  <input type = "submit" class="button1" value = " Submit "/><br /><br /><br /><br />
                   <input type=button onClick="parent.location='index2.html'" class="button2" value='Back home'>
         </form>
      </body>
                                      </html>  
<?php
$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "baraem";
$date=date_default_timezone_get();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 if(isset($_POST['Name'])){
        $name = $_POST['Name'];
$sql = "SELECT * FROM reserv where name='$name'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    echo "Name: " . $row["Name"].  "<br>" . " Reservation at " . $row["time"] . "<br>";
}
    
}
    else {
    echo "No reservations was made" ;
}
 }
 
$conn->close();
?>
