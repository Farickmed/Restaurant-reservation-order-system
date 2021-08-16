    <?php 
	
	$db = new mysqli("localhost", "root","", "208901_thenmejia");
	
	if($db->connect_errno) {
		
		echo "error";
		
	}
	
?>