<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Product_admin</title>
    </head>
<body>

<?php
error_reporting(0);
if(isset($_POST['submit'])){
    $pro_name=$_POST['name'];
    $pro_des=$_POST['message'];
    if($pro_name==""){
                  echo "plese enter the pro_name";
    }
    else if(pro_des==""){
                  echo "pleas enter the pro_des";
    }
    else{
     include("conn.php"); 
     $sql="INSERT INTO product (name,description) VALUES ('$pro_name','$pro_des')";
     $rsst=mysql_query($sql);
     if($rsst){
         echo "sent SUCCESS" ;
       }
    }
}
?>

<form  action="productadmin.php" method="post"  name="form" >
    <table  border="1" height="100"  width="400">
        <tr>
            <td><label>Name:</label></td> 
            <td><input type="text"  name="name" style="width:300px ;height:25px" value="" ></td>
        </tr>
        <tr>
                  <td><label>message:</label></td> 
                  <td><textarea name="message" style="width:300px ;height:50px" value="" ></textarea></td>
        </tr>
    <table>
    <input type="submit" name="submit" value="Submit" style="margin-left:348px"> 
    </form>

</body>
</html>