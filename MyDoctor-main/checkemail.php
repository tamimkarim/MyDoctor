<?php 
require 'regdata.php';
foreach($data as $row)  
{ 
	if($_POST['email']==$row["email"])
	{

		$email = $row["email"];
  		return;

	}
}

?>