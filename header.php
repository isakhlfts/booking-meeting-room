<?php 
session_start();
 ?>

	 <main>
	 	<?php 
	 	if(isset($_SESSION["userId"])){
	 		require 'home.php';
	 	}else{
	 		require 'logout.php';
	 	}	 

	 	?>
	 </main>


 <?php 
 require 'footer.php'; 
 ?>