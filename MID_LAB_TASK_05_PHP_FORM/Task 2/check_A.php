<?php 


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
else{
    echo "invalid email !!";
}

?>