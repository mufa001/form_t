<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>login</title>
        <style>
            .hed{
               font-size:25px;
               color:buttonface;
               font-style:sans-serif;
               margin-left:50px;
                
            }
            
        </style>
    </head>

<body>
 <?php
 session_start();
 
 if(isset($_POST['submit'])){
     $fn=$_POST['usr'];
     $ps=$_POST['psw'];
     $en=md5($ps);
     include("conn1.php");
     $sql="select *  from  login where user = '$fn' and pass ='$en'";
     $rst=mysql_query($sql);
     
     $no=mysql_num_rows($rst);
     if($no>0){
       $_SESSION["username"]=$fn;
       $_SESSION["password"]=$ps;
      ?>
      
     <script  language="javascript">
         var txt;
         var r = confirm("do you  want to login!");
         if (r == true) {
            txt = "yes";
        } else {
        txt = "no!";
        }
        if(txt == "yes"){
            window.location="usersi.php" ;
        }
        else{
            document.write("good buy");
        }
         </script>
    
    
    <?php
   }
 
 }
 
?>
<h  class="hed"> USER LOGIN </h>
<form   action="tl.php"  method="post" >
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


