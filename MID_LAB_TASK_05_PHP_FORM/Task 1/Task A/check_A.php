<?php 


if(isset($_REQUEST['submit']))
{
    $name = $_REQUEST['name'];
    if($name == ""){
        echo "null value...";
    }
    else{
		echo $name;
	}
}
else{
    echo "invalid name !!";
}

?>