<?php 
	

    $uerror = "";
    $username = "";

    if(isset($_REQUEST['submit']))
    {
		
	if($_REQUEST['username'] == null){
		$uerror =  "invalid username!";
	}else{
		$username = $_REQUEST['username'];
	}

}



	
?>


<!DOCTYPE html>
<html>
<head>
	<title> Name input </title>
</head>
<body>	
	<form method="post" action="#">

		<fieldset>
            

			<legend>NAME</legend>
            <input type="text" name="username" value="">
            <br/>
            <hr>
            <input type="submit" name="submit" value="Submit">

         
		</fieldset> 
	</form>
</body>
</html>