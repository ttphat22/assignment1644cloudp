<?php 
	if (isset($_GET['btnLogin']))
	{
		$us=$_GET['txtUsername'];
		$pa=$_GET['txtPass'];
		echo "You have loged in with ". $us." and password is ".$pa;
	}
?>  