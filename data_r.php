<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>data_R</title>
    </head>

<body>
<?php
include("conn.php");
if(isset($_POST['delete'])){
    echo $deleteid=$_POST['hid'];
    $sql="delete from form_t where ID=$deleteid";
    $rstt=mysql_query($sql);
}

?>

<?php 
$sql="select * from form_t";
$rstt=mysql_query($sql);
echo "<table border=1  width=800 height=200>" ;
echo "<tr>
      <td>ID</td>
      <td>NAME</td>
      <td>ADDRESS</td>
      <td>DOB</td>
      <td>AGE</td>
      <td>COURSE</td>
      <td>USERNAME</td>
      <td>DELETE</td>
      <td>EDIT</td>
      </tr>";
$k=1;
while($row=mysql_fetch_array($rstt)){
    $k++;
    echo "<tr>";
    echo "<td>".$row['ID']."</td>";
    echo "<td>".$row['NAME']."</td>";
    echo "<td style=width:200px>".$row['ADDRESS']."</td>";
    echo "<td style=width:200px>".$row['DOB']."</td>";
    echo "<td>".$row['AGE']."</td>";
    echo "<td>".$row['COURSE']."</td>";
    echo "<td>".$row['USERNAME']."</td>";
    echo "<form action='data_r.php'  method='post' name='delete'>";
    echo "<td><input type='submit' name='delete' value='DELETE'>";
    echo "<input type='hidden' name='hid' value=".$row['ID']."> </td>" ;
    echo "</form>";
    echo "<form action='e.php' method='post' name='edit'>" ;
    echo "<td><input type='submit' name='edit' value='EDIT'>";
    echo "<input type='hidden' name='hide' value=".$row['ID']."></td>";
    echo "</form>";
    echo "</tr>" ; 
}
 echo "</table>" ;
?>

</body>
</html>