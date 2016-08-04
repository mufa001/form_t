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
            <th>Name</th>
            <th>detail</th>
             <tr>";
        while($row=mysql_fetch_array($rst)){
            echo "<tr><td>";?>
        <a href="pro_de.php ? id=<?php echo $row['id']?>" ><?php echo $row['name']?></a></td>
<td>
  <?php
   //error_reporting(0);
    $x=$_GET['id'];
    $sq="select * from product where id='$x'";
    $rsst=mysql_query($sq);
    $no=mysql_num_rows($rsst);
    $r=mysql_fetch_array($rsst);
    if(strlen($r['description'])<20){
        echo $r['description'];
        
    }
    else{
        echo substr($r['description'],0,20);
        ?>
    <a href="more.php ? i=<?php echo $r['id'] ?>">more</a>
    <?php
      }
    
    /*while($rw= mysql_fetch_array($rsst)){
    if(strlen($rw['description'])<20){
            echo $rw['description'];
        }
        else{
            echo substr($row['description'],0,20);
            ?>
    <a href="more.php ? i=<?php echo $rw['id']?>">more</a>
    <?php
            
        }
        
    
    }*/
  ?>  
</td>
<?php echo"</tr>" ;

        } 
        echo "</table>" ;
        ?>
</body>
</html>

