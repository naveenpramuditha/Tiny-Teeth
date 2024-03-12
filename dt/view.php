<?php include "db_conn.php";
require_once "importance.php"; 

if(!User::loggedIn()){
	Config::redir("login.php"); 
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<?php require_once "inc/head.inc.php";  ?> 

</head>
<body>
<?php require_once "inc/header.inc.php"; ?> 
	<div class='container-fluid'>
		<div class='row'>
			<div class='col-md-2'><?php require_once "inc/sidebar.inc.php"; ?></div> <!-- this should be a sidebar --> 
			<div class='col-md-7'>
				<div class='content-area'> 
				<div class='content-header'> 
					XRAY Reports <small>View Patient XRAY</small>
				</div>
			
				
			</div>  
			
	
     <a href="xray.php">&#8592;</a>
     <?php 
          $sql = "SELECT * FROM images ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
             
             <div class="alb">
             	<img src="uploads/<?=$images['image_url']?>">
             </div>
          		
    <?php } }?>
</body>
</html>