<!doctype html>
<html>
    <head>
        <title>product_dis</title>
    </head>
    <body>
<?php
 include("conn.php");
 $sql="select * from product " ;
 $rst=mysql_query($sql);
 echo "<table border=1 width=800 height=200>";
 echo "<tr>
            <td>Name</td>
            <td>detail</td>
      <tr>";
 while($row=mysql_fetch_array($rst)){
     echo "<tr>";?>
     <td><a  href="message.php ? DX=<?php echo $row['id'] ?>" > <?php echo $row['name']?></a></td>
      
     <td><?php 
           $x=$_GET['DX'];
           $sql="select * from product where id='$x' ";
           $rsst=mysql_query($sql);
           while($rw=mysql_fetch_array($rsst)){
               if(strlen($rw['description'])<20){
                   echo $rw['description'];
               }else 
               {
                  echo substr($row['description'],0,20);
                  ?>
         <a href="more.php?id=<?php echo $rw['id'] ?>" >MORE</a>
                      <?php
                   
               }
           }
           
           ?></td>
     <?php
     echo "</tr>";  
 }
 echo "</table>";

?>
        
</body>
</html>