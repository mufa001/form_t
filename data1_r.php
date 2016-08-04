<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>data1_R</title>
    </head>  
    <body>
<?php 
 include("conn.php");
 if(isset($_POST['delete'])){
    $delid=$_POST['hid'];
    $sql="delete from form_t where ID=$delid";
    $rstt=mysql_query($sql);
 }
 
?>     
<?php 
   include("conn.php");
   $sql="select * from form_t";
   $rsst=mysql_query($sql);
   echo "<table border=1 width=1000 height=200>" ;
   echo "<tr>
   <td>ID</td>
   <td>NAME</td>
   <td>ADDRESS</td>
   <td>DOB</td>
   <td>AGE</td>
   <td>COURSE</td>
   <td>USERNAME</td>
   <td>PHOTO</td>
   <td>PASSWORD</td>
   <td>EDIT</td>
   <td>DELETE</td>
   </tr>";
   
   while($row=mysql_fetch_array($rsst)){
       
       echo "<tr>" ;
       echo "<td>".$row['ID']."</td>" ;
       echo "<td>".$row['NAME']."</td>";
       echo "<td  style='width:200px'>".$row['ADDRESS']."</td>";
       echo "<td  style='width:200px'>".$row['DOB']."</td>" ;
       echo "<td>".$row['AGE']."</td>" ;
       echo "<td>".$row['COURSE']."</td>";
       echo "<td style='width:200px'>".$row['USERNAME']."</td>";
       echo "<td style='width:200px'><img src='img/".$row['photo']."'></td>";
       echo "<td>".$row['PASSWORD']."</td>" ;
       echo "<form action='ed.php' method='post' name='edit'>";
       echo "<td><input type='submit' name='edit' value='EDIT'>";
       echo "<input type='hidden'  name='hide' value=".$row['ID'].">";
       echo "</td></form>";
       echo "<form action='data1_r.php' method='post' name='delete'>";
       echo "<td><input type='submit' name='delete' value='DELETE'>";
       echo "<input type='hidden' name='hid' value=".$row['ID'].">";
       echo "</td></form></tr>";
       
   }
echo "</table>";



?>  
</body>   
</html>





