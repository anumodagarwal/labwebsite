<html>
<?php
$servername = "127.0.0.1";
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

$sql = "CREATE TABLE IF NOT EXISTS user ( fname varchar(10),lname varchar(10),day int,month int,year int,age int,roll varchar(8),sex varchar(6),curradd text,madd text,email text,pho varchar(10),reg varchar(8),username varchar(10),pass varchar(10))";
$conn->query($sql); 
if ($conn->query($sql) === TRUE) {
    echo "New table created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$firstName = $_POST['fname'];
$Registration = $_POST['reg'];
$lastName = $_POST['lname'];
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$roll_no = $_POST['roll'];
$current_address = $_POST['curradd'];
$mailing_address = $_POST['madd'];
$email = $_POST['email'];
$phone_no = $_POST['pho'];
$username=$_POST['username'];
$password=$_POST['pass'];

$sql = "INSERT INTO user (fname,lname,day,month,year,age,roll,sex,curradd,madd,email,pho,reg,username,pass) VALUES ('$firstName','$lastName','$day','$month','$year','$age','$roll_no','$sex','$current_address','$mailing_address','$email','$phone_no','$Registration','$username','$password')";
if ($conn->query($sql) === TRUE) {
    header("Location: action.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</html>
