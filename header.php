<?php 
session_start();
 ?>

	 <main>
	 	<?php 
	 	if(isset($_SESSION["userId"])){
	 		require 'index.php';
	 	}else{
	 		require 'logout.php';
	 	}	 

	 	?>
	 </main>


 <?php 
 require 'footer.php'; 
 ?>