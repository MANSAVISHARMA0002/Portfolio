<?php
 $con=mysqli_connect('localhost','root');
 if($con){
     echo"Connection successful";
 }
 else{
     "No connection";
 }
 mysqli_select_db($con,'portfoliouserdata');
 $name=$_POST['name'];
 $email=$_POST['email'];
 $number=$_POST['number'];
 $subject=$_POST['subject'];
 $message=$_POST['message'];

 $query ="INSERT INTO userinfodata($name,$email,$number,$subject,$message)
 VALUES('$name','$email','$number','$subject','$message')";
 echo "$query";
 mysqli_query($con,$query);
 if($rs)
 {
     header('location:infodata.php');
}


?>