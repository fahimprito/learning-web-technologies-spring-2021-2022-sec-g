

<!DOCTYPE html>
<html>
<head>
	<title>Task 3 date of birth </title>
</head>
<body>	
	<form method="post">
		<fieldset>
			<legend>Date of Birth</legend>
            <input type="date" name="birthday" value="<?php 


if(isset($_REQUEST['submit']))
{
    $birthday = $_REQUEST['birthday'];
    if($birthday == ""){
        echo "null value";
    }
    else{
		echo $birthday;
	}
}

?>

"><br/><hr>
            <input type="submit" name="submit" value="Submit">
         
		</fieldset>
	</form>
</body>
</html>