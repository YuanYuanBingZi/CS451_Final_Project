<?php

include('connectionData.txt');

$conn = mysqli_connect($server, $user, $pass, $dbname, $port)
or die('Error connecting to MySQL server.');

?>

<html>
<head>
  <title>Pet Store: Staff Information</title>
  </head>
  
  <body bgcolor="white">
  
  
  <hr>
  
  
<?php
  
$staff_id = $_POST['staff_id'];

$staff_id = mysqli_real_escape_string($conn, $staff_id);
// this is a small attempt to avoid SQL injection
// better to use prepared statements

$query = "SELECT staff_id, fname, lname, phone, age, address
FROM staffs
WHERE staff_id = ";
$query = $query."'".$staff_id."'";

?>

<p>
The query:
<p>
<?php
print $query;
?>

<hr>
<p>
Result of query:
<p>

<?php
$result = mysqli_query($conn, $query)
or die(mysqli_error($conn));

print "<pre>";
while($row = mysqli_fetch_array($result, MYSQLI_BOTH))
  {
    print "\n";
    print "$row[firstName]  $row[lastName]  $row[description]";
  }
print "</pre>";

mysqli_free_result($result);

mysqli_close($conn);

?>

<p>
<hr>
<p>
<a href="staff_information.html" >Return </a>
back to the html page before.
 
<hr>

<p>
<a href="staff_information_php.txt" >Contents</a>
of the PHP program that created this page. 	 
 
</body>
</html>