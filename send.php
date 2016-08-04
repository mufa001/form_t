<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
     <?php
         if(isset($_POST['submit'])){
             $fn=$_POST['name'];
             $ad=$_POST['address'];
             $dd=$_POST['date'];
             $mm=$_POST['month'];
             $yy=$_POST['year'];
             $dob=$yy."/".$mm."/".$dd;
             $age=intval($_POST['age']);
             $gen=$_POST['gender'];
             $cour=$_POST['course'];
             $un=$_POST['username'];
             $ps=$_POST['password'];
             $con=$_POST['confirm'];
             $image = $_FILES['photo']['name'];
             
             if($image!=""){
             $path="img/$image";
             copy($_FILES['photo'][tmp_name],$path);
             }
             
                if($fn==""){
                 echo "please enter name";
             }
             else if($ad==""){
                 echo "please enter address";
             }
             else if($dob==""){
                 echo "enter dob";
             }
             else if($age==""){
                 echo "pleas enter age";
             }
             else if($gen==""){
                 echo "please select gender";
             }
             else if($cour==""){
                 echo "plese slect course";
             }
             else if($un==""){
                 echo "please enter username";
             }
             else if($ps==""){
                 echo "please enter password";
             }
             else if($ps !=$con){
                 echo "check the confirm";
             }
          
             
             else {$conn=mysql_connect('localhost','root','');
             if(!$conn){
                 die("could not connect".mysql_error());
             }else{
                 $db=mysql_select_db("mydb",$conn);
             }
             
             
             $sql="INSERT INTO form_t (NAME ,ADDRESS,DOB,AGE,GENDER,COURSE,USERNAME,PASSWORD,photo)
                                VALUES('$fn','$ad','$dob','$age','$gen','$cour','$un','$ps','$image')";
              
             $rsst=mysql_query($sql);
             if($rsst)
             {echo "sent";}
             
             
             
             
             
             }
             
             
         }
             
             
         
      
      ?>
       <form action="send.php" method="post" name="form" enctype="multipart/form-data">
        <table border="1" height="400" width="400">
            
              <tr>
                  <td><label>Name:</label></td> 
                  <td><input type="text"  name="name" style="width:300px ;height:25px" value="" ></td>
             </tr>
             <tr>
                  <td><label>Address:</label></td> 
                  <td><textarea name="address" style="width:300px ;height:125px" value="" ></textarea></td>
             </tr>
             <tr>
                  <td><label>dob:</label></td> 
                  <td>
                      <select name="date"  style="height:25px;width:100px">
                       <option value="1">1</option>
                       <option value="2">2</option>
                       <option value="3">3</option>
                       <option value="4">4</option>
                      </select>
                      <select name="month"  style="height:25px;width:90px">
                       <option value="1">jan</option>
                       <option value="2" >feb</option>
                       <option value="3">march</option>
                       <option value="4">april</option>
                      </select>
                      <select name="year"  style="height:25px;width:100px">
                       <option value="2000">2000</option>
                       <option value="2001">2001</option>
                       <option value="2002">2002</option>
                       <option value="2003">2004</option>
                      </select>
                  </td>
              </tr>
              <td><label>Age:</lable></td>
              <td><input type="text" name="age" style="height:25px;width:300px;margin-left:0px" value="" ></td>
              <tr>
              <tr>
                  <td><label>Gender:</label></td>
                  <td>
                      <input type="radio"  name="gender" value="male" style="margin-left:25px">Male
                      <input type="radio" name="gender" value="female"style="margin-left:125px" >Female
                  </td>
              </tr>
              <tr>
                  <td><label>WantedCourse:</label></td>
                  <td>
                      <input type="checkbox" name="course" value="Java">Java
                      <input type="checkbox" name="course" value="Python" style="margin-left:30px">Python
                      <input type="checkbox" name="course" value="Mysql" style="margin-left:30px">Mysql<br>
                      <input type="checkbox" name="course" value="Php">Php
                      <input type="checkbox" name="course" value="C#" style="margin-left:33px">C#
                      <input type="checkbox" name="course" value="C++" style="margin-left:53px">C++
                  </td>
              </tr>
              <tr>
                  <td><label>Username:</label></td>
                  <td><input type="text" name="username" value=""  style="width:300px"></td>
              </tr>
              <tr>
                  <td><label>Password:</label></td>
                  <td><input type="password" name="password" vlaue="" style="width:300px"></td>
               </tr>
               <tr>
                   <td><label>Confirm:</label></td>
                   <td><input type="password" name="confirm" value="" style="width:300px"></td>
               </tr>
               <tr>
                   <td>file</td>
                   <td><input type="file" name="photo"><td>
               </tr>
             </table>
            <input type="submit" name="submit" value="Submit" style="margin-left:348px"> 
            
            </form>
        </table>
    </body>
</html>



