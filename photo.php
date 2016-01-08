<?php
	function pic($x){
		echo '<div id="pic" class="pic">';
			echo '<img src="./img/photo/pic'.$x.'.jpg" alt="写真" width="240px" height="150px">';
		echo '</div>';
	}
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>（仮）JTRIPオフィシャルサイト</title>

		<link type="text/css" rel="stylesheet" href="./css/style.css">
		<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="./js/main.js"></script>
	
	</head>
	<body>
		<?php include "header.php" ?>
		
		<?php include "bars.php"; ?>
		
		<div class="top">
			<div class="top_inside">
				<h3>写真館</h3>
			</div>
		</div>
			<div class="pics clearfix">
				<?php
					for( $i=0; $i <= 9; $i++ ){
						echo pic($i);
					}
				?>
			</div>
		
		<?php include "footer.php"; ?>
		
	</body>
</html>