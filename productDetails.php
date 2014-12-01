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
        $domain=$_GET['domain'];
        $con=mysql_connect('localhost','root','secret');
        mysql_select_db("nviztech",$con) or die('Error select: '.mysql_error());
        if (mysqli_connect_errno())
          echo "Failed to connect to MySQL: " . mysql_connect_error();
        $query=mysql_query("SELECT name,image FROM Products where id=$id",$con);
      ?>
      <center>
          <?php 
            $row=mysql_fetch_row($query);?>
            <h2><?php echo $query[0];?></h2>
          <br>
          <img src="<?php echo $row[1]; ?>" style="width:400px;height:300px"><br>
      </center>
    </div>
    </body>
  </html>









    








    <?php
        public class ProductFinder {
          public static main(){
            $source=mysql_query("SELECT description FROM Products where id=$id",$con);
            $descriptions =array();
            $count=strlen($descriptions);
            $extracted->setSize($count);
            String filteredSource=filterWords(source);
            for(int i=0;i<extracted.length;i++)
            {
              if(extract(descriptions[i],filteredSource))
                extracted[i]=descriptions[i];
            }
            
        }

        private static boolean extract(String descriptions, String filteredSource) {
          
          int count=0;
          String filteredDescription=filterWords(descriptions);
          String[] fetchedSource=filteredSource.split(" ");
          String[] fetchedDescription=filteredDescription.split(" ");
          for(int i=0;i<fetchedSource.length;i++)
          {
            for(int j=0;j<fetchedDescription.length;j++){
              if(fetchedSource[i].equalsIgnoreCase(fetchedDescription[j]))
                count++;
            }
          }
          
          if(count>5)
            return true;
          else return false;

        }

        private static String filterWords(String string) {
          //Stopwords stop = null;
          ArrayList wordS=Stopwords.getStopwords();
          String newString[]=string.split(" ");
          for(int k=0;k<newString.length;k++){
            for(int i=0;i<wordS.size();i++){
              if(newString[k].equalsIgnoreCase((String) wordS.get(i)));
                newString[k]="";
            }
          }
          return newString.toString();
        }

      }


    ?>
  </body>
</html>