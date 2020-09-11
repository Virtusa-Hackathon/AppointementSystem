<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('header.php'); ?>
<?php include('uptomenu.php'); ?>
<?php
							include('config.php');
							if(isset($_POST['submit'])){
							$sql = "DELETE * FROM booking";
							if (mysqli_query($conn, $sql)) {
							    echo "<script>alert('Your booking has been Canceled!');</script>";
							} else {
							     echo "<script>alert('There was an Error')<script>";
							}
							mysqli_close($conn);
						}
					?> 
<?php include('footer.php'); ?>