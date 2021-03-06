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
		<?php include "header.php"; ?>
		
		<?php include "bars.php"; ?>
		
		<div class="top">
			<div class="top_inside">
				<h3>会社案内</h3>
			<div>
			<div class="article">
				<?php include "functions.php"; ?>
				<table>
					<?php company("会社名","有限会社　Ｊ&middot;スタイル"); ?>
					<?php company("代表取締役","森　賢哉"); ?>
					<?php company("ブランド名","J&middot;Trip（ジェイ&middot;トリップ）"); ?>
					<?php company("事業内容","自動二輪部品&middot;用品の企画/開発/製造/販売"); ?>
					<?php company("所在地","&#12306;583-0008<br>大阪府藤井寺市大井1-4-32"); ?>
					<?php company("電話番号","072-952-2220"); ?>
					<?php company("FAX","072-952-2260"); ?>
					<?php company("Mail","webmaster&#64;j-trip.co.jp"); ?>
					<?php company("取引企業","全国オートバイ用品店および卸会社"); ?>
				</table>
				
			</div>
		</div>
		
		<?php include "footer.php"; ?>
		
	</body>
</html>