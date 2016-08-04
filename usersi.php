<!doctype html >
<html>
    <head>
        <title>USER SIGN IN</title>
        <meta charset="utf-8">
        <style>
            .heding{
                font-size:25px;
                font-style:sans-serif;
                color:black;
                margin-left:100px;
             }
            p{
              font:13px;
              font-style:sans-s;
           }
        </style>
    </head>
<body>
<?php 
session_start();
echo "WELCOME ".$_SESSION['username']." VIRTUAL LEARNING";
if(isset($_POST['submit']))
{
  $fn=$_POST['usr'];
  $ps=$_POST['psw'];
  $en=md5($ps);
  if($fn=="")
     {
        echo "plese enter username";
     }
  else if($ps=="")
     {
                  echo "please enter a password";
     }
  else
      {
      include("conn1.php");
      $sql="insert into login (user,pass) values ('$fn','$en') ";
      $rsst=mysql_query($sql);
      if($rsst){
            echo "sent";
        } 
      
      }

}

?>

<h  class="heding">USER SIGN IN </h>
<form   action="usersi.php"  method="post" >
   <table  border="1" height="50" width="400"  style="margin-left:40px;margin-top:30px">
       <tr>
       <td  ><label>USERNAME</label></td>
       <td ><input  type="text"  name="usr" style="width:300px ;height:25px" value=""></td>
       </tr>
       <tr>
       <td  ><label>PASSWORD</label></td>
       <td ><input  type="text"  name="psw" style="width:300px ;height:25px" value=""></td>
       </tr>
   </table>
    <input type="submit" name="submit" value="SUBMIT"  style="margin-left:375px">
    </form>
    
    </body>
    </html>