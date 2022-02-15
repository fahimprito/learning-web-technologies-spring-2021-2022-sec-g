




<!DOCTYPE html>
<html>
<head>
	<title>Task 1 Name </title>
</head>
<body>	
	<form method="post">
		<fieldset>
			<legend>NAME</legend>
            <input type="text" name="name" value="<?php 
            
if(isset($_REQUEST['submit']))
{
    $name = $_REQUEST['name'];
    if($name == ""){
        echo "null value...";
    }
    else{
		echo $name;
	}
}           ?>" >
<br>
<hr> 
            <input type="submit" name="submit" value="Submit">
         
		</fieldset>
	</form>
</body>
</html>