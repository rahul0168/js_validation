
<?php 
include 'db_connection.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<script type="text/javascript" src="js/java.js"></script>
</head>
<body 
style="  background-image: url('image/backgroundimg.png'); background-repeat: no-repeat; width:100%;  background-size: cover;" >
	  <div class="container">
	   <div class="col-xs-8">
	   	<div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="image/logo.jpeg" alt="img" ></figure>
						</div>
						
		<div class="signin-form">
        <form name="register" action="index.php" method="post" onsubmit="return vali();" id="register" align="center"enctype="multipart/form-data"><br> 
		  
	       <h1 align="center" class="">FORM</h1>
	        <div class="form-group" align="center">
	        <input type="text" name="firstname" class="form-control-lg"  placeholder="First Name"onkeypress="return onlyAlphabets(event,this);"  autocomplete="off">
	          </div>

	      <div class="form-group">
	       <input type="text" name="lastname" class="form-control-lg"  placeholder="Last Name"onkeypress="return onlyAlphabets(event,this);" autocomplete="off">
            </div>

	       <div class="form-group">
	       <input type="text" name="phone" class="form-control-lg"  placeholder="Phone Number"  onkeypress="validate(event)"  autocomplete="off">
           </div>

	    <div class="form-group">
	    <input type="text" name="address" class="form-control-lg"  placeholder="Address"  autocomplete="off">
        </div>

	   <div class="form-group">
	     <h4>Select Profile  Picture:</h4>
        <input type="file" name="image"   accept=".jpeg">
       </div>

	    <input type="submit" name="submit" class="btn form-submit" ><br>
          
	          </div>
	        </div>
          </div>
      </form>
     </div>
   </body> 
 
 </html>


