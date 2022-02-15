<?php 


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
else{
    echo "invalid birthday !!";
}

?>