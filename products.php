<html>
<head>
	<link rel="stylesheet" href="style.css" type="text/css" />
	<div id="tile"><h1>Products in our website!!</h1> </div>
</head>
	<body>
		<div id="content">
			<!-- <img src="img/motorola_motoG.jpg"> -->
			<?php
			  $con=mysql_connect('localhost','root','');
			  mysql_select_db("nviztech",$con) or die('Error select: '.mysql_error());
			    if (mysqli_connect_errno())
			      echo "Failed to connect to MySQL: " . mysql_connect_error();
			  echo "<h2><b>Mobile Products </b></h2>";
			  $query = mysql_query("SELECT name,image FROM products where domain='Mobile'",$con);
			  echo "<table>";
			  	echo "<tr>";
			 		 while($row=mysql_fetch_array($query)){
			 			 echo "<td>";
			 			 		echo $row[0];
			 			 echo "</td>";
			 		}
			 	echo "</tr>";
			 	$query = mysql_query("SELECT name,image,id FROM Products where domain='Mobile'",$con);?>
			 		<tr>
			 		 <?php while($row=mysql_fetch_array($query)){?>
			 			 <td>
			 			 		<?php $image= $row[1]; ?>
			 			 		<a href="productDetails.php?product=<?php echo $row[0];?>&amp;id=<?php echo $row[2];?>&amp;domain=Mobile"><img src="<?php echo $image; ?>" style="width:100px;height:228px"></a>
			 			 </td>
			 		<?php }?>
			 		</tr> 
			  	</table>
		</div>
		<div id="content"> 
		<?php
			echo "<h2><b>Flip Covers</b></h2>";
			$query = mysql_query("SELECT name,image FROM Products where domain='Accessories'",$con);
			  echo "<table>";
			  	echo "<tr>";
			 		 while($row=mysql_fetch_array($query)){
			 			 echo "<td>";
			 			 		echo $row[0];
			 			 echo "</td>";
			 		}
			 	echo "</tr>";
			$query = mysql_query("SELECT name,image FROM Products where domain='Accessories'",$con);?>
			 		<tr>
			 		 <?php while($row=mysql_fetch_array($query)){?>
			 			 <td>
			 			 		<?php $image= $row[1]; ?>
			 			 		<img src="<?php echo $image; ?>" style="width:128px;height:128px">
			 			 </td>
			 		<?php }?>
			 		</tr> 
			  	</table>
		</div>
	</body>
</html>