<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>（仮）JTRIPオフィシャルサイト</title>
		<link type="text/css" rel="stylesheet" href="./css/style.css">
		<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="./js/main.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	</head>
	<body>
		<?php include "header.php" ?>
		
		<?php include "bars.php"; ?>
		
		<div class="top">
			<div class="top_inside">
				<h3>イベント</h3>
			<div>
		</div>
		<div class="article">
			<p class="eventtitle">2015年イベントスケジュール</p>
			<?php include "functions.php" ?>
			<table>
				<?php schedule("7月4日（土）","神奈川","ナップス横浜店"); ?>
				<?php schedule("7月5日（土）","神奈川","ナップス港北店"); ?>
				<?php schedule("7月11日（土）","兵庫","バイクセブン伊丹店"); ?>
				<?php schedule("7月18日（土）","神奈川","ライコランド新横浜店"); ?>
				<?php schedule("7月19日（日）","北海道","札幌2りんかん"); ?>
				<?php schedule("8月2日（日）","京都","J-TRIP杯　ミニバイクレース(近畿スポーツランド杯第2戦)"); ?>
				
			</table>
		</div>
		
		<?php include "footer.php"; ?>
		
	</body>
</html>