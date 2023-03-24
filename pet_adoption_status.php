<?php

include('connectionData.txt');

$conn = mysqli_connect($server, $user, $pass, $dbname, $port)
or die('Error connecting to MySQL server.');

?>

<html>
<head>
  <title>Pet Adoption Status</title>
  </head>
  
  <body bgcolor="white">
  
  
  <hr>
  
  
<?php
  
$check_id = $_POST['check_id'];

$check_id = mysqli_real_escape_string($conn, $check_id);
// this is a small attempt to avoid SQL injection
// better to use prepared statements

$query = "SELECT check_id, neutering, vaccine, staff_id
FROM adoption_status
WHERE check_id = ";
$query = $query."".$check_id."";

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
    print "$row[check_id]  $row[neutering] $row[vaccine] $row[staff_id]";
  }
print "</pre>";

mysqli_free_result($result);

mysqli_close($conn);

?>

<p>
<hr>
<p>
<a href="pet_adoption_status.html" >Return </a>
back to the html page before.
 
<hr>
<p>
<a href="pet_adoption_status_php.txt" >Contents</a>
of the PHP program that created this page. 	 
 
</body>
</html>
