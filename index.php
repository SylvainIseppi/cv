<?php
 if(isset($_GET['page'])){
 	$test=$_GET["page"]."php";
 	if(file_exists($test)){
 		$page=$_GET['page'];
 	}
 	else{
 		$page="accueil";
 	}
 }
 else{
 	$page="accueil";
 }
include_once("header.php");
$page =$page.".php"

?>
	<body>
	<?php
	include_once("menu.php");
	?>
	<div class="content">
	<?php
		require_once($page);
	?>
	</div>
		<footer>
		
		
		</footer>
		<!-- <script type="text/javascript" src="js/js.js"></script>-->
	<?php
		include_once("footer.php");
	?>
	</body>
	
</html>