<?php

include('connectionData.txt');

$conn = mysqli_connect($server, $user, $pass, $dbname, $port)
or die('Error connecting to MySQL server.');

?>

<html>
<head>
  <title>Pet Item</title>
  </head>
  
  <body bgcolor="white">
  
  
  <hr>
  
  
<?php
  
$type_id = $_POST['type_id'];

$type_id = mysqli_real_escape_string($conn, $type_id);
// this is a small attempt to avoid SQL injection
// better to use prepared statements

$query = "SELECT item_id, price, stock, description
FROM items
WHERE type_id = ";
$query = $query."".$type_id."";

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
    print "$row[item_id]  $row[price]  $row[stock]  $row[description]";
  }
print "</pre>";

mysqli_free_result($result);

mysqli_close($conn);

?>

<p>
<hr>
<p>
<a href="pet_items.html" >Return </a>
back to the html page before.
 
<hr>
<p>
<a href="pet_items_php.txt" >Contents</a>
of the PHP program that created this page. 	 
 
</body>
</html>
