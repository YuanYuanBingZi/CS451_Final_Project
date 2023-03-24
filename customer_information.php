<?php

include('connectionData.txt');

$conn = mysqli_connect($server, $user, $pass, $dbname, $port)
or die('Error connecting to MySQL server.');

?>

<html>
<head>
  <title>Pet Store: Customer Information</title>
  </head>
  
  <body bgcolor="white">
  
  
  <hr>
  
  
<?php
  
$customer_num = $_POST['customer_num'];

$customer_num = mysqli_real_escape_string($conn, $customer_num);
// this is a small attempt to avoid SQL injection
// better to use prepared statements

$query = "SELECT customer_num, fname, lname, phone, address
FROM customers
WHERE customer_num = ";
$query = $query."".$customer_num."";

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
    print "$row[customer_num]  $row[fname] $row[lname] $row[phone] $row[address]";
  }
print "</pre>";

mysqli_free_result($result);

mysqli_close($conn);

?>

<p>
<hr>
<p>
<a href="customer_information.html" >Return </a>
back to the html page before.
 
<hr>
<p>
<a href="customer_information_php.txt" >Contents</a>
of the PHP program that created this page. 	 
 
</body>
</html>
