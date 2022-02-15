

<!DOCTYPE html>
<html>
<head>
	<title>Task 2 Email </title>
</head>
<body>	
	<form method="post" >
		<fieldset>
			<legend>EMAIL</legend>
            <input type="text" name="email" value="<?php 


if(isset($_REQUEST['submit']))
{
    $email = $_REQUEST['email'];
    if($email == ""){
        echo "null value...";
    }
    else{
		echo $email;
	}
}

?>"><br/><hr>
            <input type="submit" name="submit" value="Submit">
         
		</fieldset>
	</form>
</body>
</html>