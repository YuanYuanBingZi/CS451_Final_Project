<?php include 'header.php'; ?>
<html>
  <head>
    <title>Welcome To Our Pet Store</title>
    <h4> Dear Our Lovely Staff! We are Always So Proud of You ❤️ </h4>
  </head>
  <body>
    <button onclick="window.location.href='staff_information.html'">Staff Information</button>
    <br>
    <button onclick="window.location.href='customer_information.html'">Customer Information</button>
  	<br>
    <button onclick="window.location.href='pet_adoption_status.html'">Pet Adoption Status</button>
    <br>
    <button onclick="window.location.href='pet_items.html'">Pet Items</button>
    <br>
    <button onclick="window.location.href='adopters.html'">Adopters</button>
    <br>
    <form action='main.php' method='post'>
      <button type='submit' class='return-button'>Return</button>
    </form>
	<footer>
		<div style="text-align:bottom;">
			<a href="staff.txt">Contents of the PHP page</a>
		</div>
	</footer>
    
  </body>
</html>