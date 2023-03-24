<?php include 'header.php'; ?>
<html>
  <head>
    <title>Welcome To Our Pet Store</title>
    <h4> Dear Our Lovely Customer </h4>
  </head>
  <body>
    <button onclick="window.location.href='pet.html'">Pet</button>
    <br>
    <button onclick="window.location.href='pet_items.html'">Pet Item</button>
  	<br>
    <button onclick="window.location.href='customer_information.html'">Customer Information</button>
    <br>
    <form action='main.php' method='post'>
      <button type='submit' class='return-button'>Return</button>
    </form>
	<footer>
		<div style="text-align:bottom;">
			<a href="customer.txt">Contents of the PHP page</a>
		</div>
	</footer>
    
  </body>
</html>