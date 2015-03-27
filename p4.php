<html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user where username='$username' and password='$password'";
$result = $conn->query($sql);
if ($result === TRUE) {

    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>Name</td></tr><tr>".$row["fname"]." ".$row["lname"]."</td></tr>"
			 "<tr><td>Date of Birth</td></tr><tr>".$row["day"]."/".$row["month"]."/".$row["year"]."</td></tr>"
			 "<tr><td>Age</td></tr><tr>".$row["age"]."</td></tr>"
			 "<tr><td>Sex</td></tr><tr>".$row["sex"]."</td></tr>"
			 "<tr><td>Roll Number</td></tr><tr>".$row["roll"]."</td></tr>"
			 "<tr><td>Current Address </td></tr><tr>".$row["curradd"]."</td></tr>"
			 "<tr><td>Mailing Address </td></tr><tr>".$row["madd"]."</td></tr>"
			 "<tr><td>Email  </td></tr><tr>".$row["email"]."</td></tr>"
			 "<tr><td>Phone Number </td></tr><tr>".$row["pho"]."</td></tr>"
			 "<tr><td>Regitration Number</td></tr><tr>".$row["reg"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</html>