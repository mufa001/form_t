<?php 
include("conn.php");
$update=$_POST['hide'];
if($update!=""){
    $sql="select * from form_t where ID=$update";
    $rstt=mysql_query($sql);
    $row=mysql_fetch_array($rstt);
    $a=$row['NAME'];
    $b=$row['ADDRESS'];
}
?>

<?php 
if(isset($_POST['submit'])){
    $fn=$_POST['name'];
    $ad=$_POST['address'];
    $id=$_POST['hid'];
    $sql="update form_t set NAME='$fn', ADDRESS='$ad' where ID='$id'";
    $rst=mysql_query($sql);
    if($rst){
        ?>
        <script type="text/javascript">
            window.location="data_r.php";
            </script>
    <?php
    }
    
    
}
?>
<form  action="e.php"  method="post"  name="edit">
    <table border="1" width="500" height="100">
        <tr>
            <td><label>Name:</label></td>
            <td><input type="text" name="name" style="width:400px;height:25px" value=<?php echo $a ?>></td>
        </tr>
         <tr>
            <td><label>Address:</label></td>
            <td><input type="text" name="address" style="width:400px;height:25px" value=<?php echo $b ?>></td>
        </tr>
        <tr><td></td><td><input type="hidden" name="hid" value=<?php echo $update ?>></td></tr>
        </table>
        <input type="submit"  name="submit" value="submit" style="margin-left:444px">
        </form>