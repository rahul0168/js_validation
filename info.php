<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	
</head>
<body 
style="  background-image: url('image/backgroundimg.png'); background-repeat: no-repeat; width:100%;  background-size: cover;" >

<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "project";
    $connect = mysqli_connect($hostname,$username, $password, $databaseName);


    $result = mysqli_query($connect, "SELECT * FROM `formdata` ORDER BY  f_id  DESC limit 1 "); 


if ($result)
{
    
    while($query2=mysqli_fetch_assoc($result))
    {   echo "<div class='container'>
		<div class='signin-content'><table align='center'><tr><td colspan='2'><img src='".$query2['image']."'height='300' width='300'/></td></tr>
		<tr>
        <td colspan='2'>Profile Picture</td>
		</tr>";
        echo "<tr><td align='right' >First Name:-</td><td align='left'>".$query2['firstname']."</td></tr>";
        echo "<tr><td align='right'>Last Name:-</td><td align='left'>".$query2['lastname']."</td></tr>";
        echo "<tr><td align='right'>Phone:-</td><td align='left'>".$query2['phone']."</td></tr>";
        echo "<tr><td align='right'>Addess:-</td><td align='left'>".$query2['address']."</td></tr></div></div>";
    }
}
else 
{
    echo " problem problem..........";
}

?>

</body>
</html>