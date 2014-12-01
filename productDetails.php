<html>
<head>
  <link rel="stylesheet" href="style.css" type="text/css" />
  <div id="tile">
    <h1>
      <?php
        $product=$_GET['product'];
        echo $product;?>
    </h1> 
  </div>
</head>
  <body>
    <div id="content">
      <?php
        $product=$_GET['product'];
        $id=$_GET['id'];
        $con=mysql_connect('localhost','root','secret');
        mysql_select_db("nviztech",$con) or die('Error select: '.mysql_error());
        if (mysqli_connect_errno())
          echo "Failed to connect to MySQL: " . mysql_connect_error();
        $query=mysql_query("SELECT name,image FROM Products where id=$id",$con);
        <center>
          <?php 
            $row=mysql_fetch_row($query);?>
            <h2><?php echo $row[0];?></h2>
          <br>
          <img src="<?php echo $row[1]; ?>" style="width:400px;height:300px"><br>
      </center>
/* --------fetching frequency---------------------*/
      <?php
        $frequency=mysql_query("SELECT id,frequency FROM Products",$con);
          $i=0;
          $result=array();
          while($row=mysql_fetch_array($query)){
            for($j=0;$j<2;$j++){
              $result[$i][$j]=$row[$j];
            }
            $i++;
          }
      ?>
/* --------end frequency---------------------*/    
      <center>
          <?php 
            $row=mysql_fetch_row($query);?>
            <h2><?php echo $query[0];?></h2>
          <br>
          <img src="<?php echo $row[1]; ?>" style="width:400px;height:300px"><br>
      </center>
    </div>
    <?php
        
    ?>
  </body>
</html>
