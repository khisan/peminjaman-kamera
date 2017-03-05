<?php 
session_start();
session_destroy();
	echo "<script>alert('Telah Logout')</script>";
	echo "<script>location='index.php'</script>"; 
?>