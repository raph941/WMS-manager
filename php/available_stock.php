<?php

$server='localhost';
$user = 'root';
$password = '';
$database = 'wms';

$conn = mysqli_connect($server, $user, $password, $database);
$str = "select item_name, quantity, price from add_item";

$qry = mysqli_query($conn, $str);

?>
<table border="0px solid black" style= "color: blue;" >
	<tr>
		<th>item_name</th>
		<th>quantity</th>
		<th>Price</th>
	</tr>
	


<?php

while ($rs=mysqli_fetch_array($qry)) {
	
	
	print "<tr>
	<td> ".$rs['item_name']."</td>
	<td> ".$rs['quantity']."</td>
	<td> ".$rs['price']."</td>
	</tr>";
}

?>
</table>
