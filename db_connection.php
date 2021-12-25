<?php

if(isset($_POST['submit']))
{

  $con = mysqli_connect('localhost', 'root', '', 'project');

  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];
  $filename=$_FILES["image"]["name"];
  $tempname=$_FILES["image"]["tmp_name"];
  $folder="uploads/".$filename;
  move_uploaded_file($tempname , $folder);
  
  $query=" INSERT INTO formdata (firstname,lastname,phone,address,image) values('$firstname','$lastname','$phone','$address'
  ,'$folder')";
      $result = mysqli_query($con, $query);
      if($result)
      {
       echo "<script>alert('you form successful submited')</script>";
       echo "<script>window.open('info.php','_self')</script>";
      }
      else
        {
        echo "DATA NOT INSERTED";
      }
}
?>