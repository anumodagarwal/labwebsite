<html>
<head>
<title>Admin::Home</title>
</head>
<body style="background-color:; background-image:url(); background-size:cover;">
<div id="adm_table" style="background-color:;">
<table style="position:relative;" hspace=30% vspace=10% border="1" cellspacing=1px>
<th>First Name</th>
<tr><td rowspan=11 colspan=15>
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
mysql_select_db('student');
$sql="SELECT * FROM user WHERE status=0";
	//$result = $conn->query($sql);
	
	
	$retval = mysql_query( $sql, $conn );
 
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
	$row = mysql_fetch_array($retval, MYSQL_ASSOC); 
	
?>
</td></tr>

</table> 
</div>

</body>
</html>	