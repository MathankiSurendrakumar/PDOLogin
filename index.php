<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <head>
        
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
    
    <body>
       
        
        <?php
session_start();
?>
        <?php
        // put your code here
        
        if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
	echo '<ul style="padding:1; text-align:center; color:red; size:center;">';
	foreach($_SESSION['ERRMSG_ARR'] as $msg) {
		echo '<li>',$msg,'</li>'; 
	}
	echo  '</ul>';
	unset($_SESSION['ERRMSG_ARR']);
}
?>
       
            <form action="reg.php" method="POST"><br>
    <center> <h1>Login Form</h1> 
        
        <div class="form-group">
            <label for="exampleInputEmail1">    Username : <br> </label>
<input type="text" name="uname" /><br>
        </div>
 <div class="form-group">       
     <label for="exampleInputEmail1"> Password : <br> </label>
<input type="password" name="pword" /><br><br>
 </div>
        
<!--<input type="submit" value="Login"  /> -->

<input type="submit" class="btn btn-info" value="Log In">
</form>

</center>
        
    </body>
</html>
