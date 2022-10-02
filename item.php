<style type="text/css">
	
	table{
		background-color: red;
		margin-left: 30%;
		margin-right: 30%;
		cursor: pointer;


	}
	tr{
		color: white;
		font-family: calibri(Body);
	}
	td:hover{
		background: blue;
	}
	td{
		background-color: green;
		font-family: calibri(Body);
	}
	.y{
		background-color: #333777;
	}
</style>
<?php


$item_ID=4006;
$item_name="computer";
$qty=10;
$price=2;
$total=$qty*$price;
$discount=3;
$cash=20

?>
<table border="1">
	
	<tr><td class="y">Item ID</td><td><?php echo "$item_ID";?></td></tr>
	<tr><td class="y">Item Name</td><td><?php echo "$item_name";?></td></tr>
	<tr><td class="y">Quantity</td><td><?php echo "$qty";?></td></tr>
	<tr><td class="y">price</td><td><?php echo "$price";?></td></tr>
	<tr><td class="y">total</td><td><?php echo "$total";?></td></tr>
	<tr><td class="y">Discount</td><td><?php echo "$discount";?></td></tr>
	<tr><td class="y">Amount Paid</td><td><?php echo "$cash";?></td></tr>
	<tr><td class="y">Balance</td><td><?php echo $total-$discount-$cash;?></td></tr>
	
</table>