<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
//$dbname = "student";

// Create connection
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

// Check connection
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}	
	$a_id=$_POST['admin'];
	$a_ps=$_POST['adm_psswd'];
mysql_select_db('student');
$sql="SELECT Name,Pass FROM admin";
	//$result = $conn->query($sql);
	
	
	$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{  if($row['Name']==$a_id && $row['Pass']==$a_ps){
	header('Location: admin_home.php');
	}
	else{
		echo "Please enter a valid username and password!";
	}
}  
mysql_close($conn);
?>