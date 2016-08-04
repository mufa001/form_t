<?php
include("conn.php");
$upd=$_POST['hide'];
if($upd!=""){
  $sql="select * from form_t where ID=$upd";
  $rstt=mysql_query($sql);
  $row=mysql_fetch_array($rstt);
  $a=$row['COURSE'];
  $b=$row['PASSWORD'];
  $c=$row['photo'];
}
?>

<?php 
if(isset($_POST['sub'])){
    $cou=$_POST['course'];
    $pas=$_POST['password'];
    $image = $_FILES['photo']['name'];
    $id=$_POST['hid'];
    if($image!=""){
        $path="img/$image";
        copy($_FILES['photo'][tmp_name],$path);
    }
    $sql="update  form_t set COURSE='$cou', PASSWORD='$pas',photo='$image' where ID='$id'";
    $rst=mysql_query($sql);
    if($rst){
        ?>
      <script type="text/javascript" >
          window.location="data1_r.php";
          </script>
   <?php 
   }
 }

 ?>

          <form action="ed.php"  method="post" name="edit"  enctype="multipart/form-data">
    <table border="1" width="700" height="100">
        <tr>
            <td><label>COURSE</label></td>
            <td><input type="text" name="course" style="width:600px;height:25px" value="<?php echo $a ?>">
        </tr>
         <tr>
             <td><label>PASSWORD</label></td>
            <td><input type="text" name="password" style="width:600px;height:25px" value="<?php echo $b ?>">
        </tr>
        <tr>
            <td><label>photo</label></td>
            <td><input type="file" name="photo"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="hidden" name="hid" value=<?php echo $upd ?>></td>
        </tr>
        </table>
       <input type="submit" name="sub" value="SUBMIT" style=" margin-left:600px">
       </form>