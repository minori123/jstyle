<DOCTYPE html>
<html lang="ja">
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

		<div class="bracket">
			<h3>オプションパーツ【片持ち】</h3>
		<?php include "functions.php"; ?>
		<?php
			bracket_2(
			'アリートブレーキロック',
			'1,500円(税別)',
			'brakelockimg2.jpg',
			'ブレーキロックの便利アイテム',
			'動画内でもご紹介の通りスタンドを立てるときにはフロントブレーキのロックが必須です。このブレーキレバーの固定をスマートかつ確実に行う、すぐれものアイテムがこのアリート製ブレーキロック。<br>ブレーキ周りのメンテナンスにも便利な一品です。'
			)
		?>
		<div class="prod clearfix">
			<div class="title clearfix">
				<h3>JT-135</h3>
				<h3>3,800～8,000円(税別)</h3>
			</div>
			<div class="prodphoto">
				<img src="./img/prod/bracket/jt_135.jpg">
			</div>
			<div class="prodtext">
			<p>スタンド用のアタッチメントです。各車種取り揃えております。詳しくはこちら。</p>
			
			<table class="monoatouch">
			<?php
				monoatouch(
				'品番',
				'品名',
				'適合',
				'希望小売価格',
				'&nbsp'
				);
			?>
			<?php
				monoatouch(
				'JT-135A',
				'片持ちシャフト<br>（ホンダ31）',
				'VFR400R(NC30)・<br>RVF(NC35)<br>VFR750R(RC30)・<br>RVF(RC45)・<br>NSR250(MC28)・<br><br>BMW F800S　等',
				'3,800円',
				'<input type="submit" value="購入">'
				);
			?>
			<?php
				monoatouch(
				'JT-135B',
				'片持ちシャフト<br>（ドゥカティ26）',
				'135Jの表にある車両を除く片持ちスイングアーム全車<br>796系･848系・ハイパーモタード<br>ストリートファイター８４８<br>･ムルティ1000/1100<br>モンスター1100もこちら',
				'3,800円',
				'<input type="submit" value="購入">'
				);
			?>
			<?php
				monoatouch(
				'JT-135D',
				'片持ちシャフト<br>（ホンダ29）',
				'VFR800・CB1000R',
				'4,500円',
				'<input type="submit" value="購入">'
				);
			?>
			<?php
				monoatouch(
				'JT-135E',
				'片持ちシャフト<br>(ホンダ19）',
				'NSR150',
				'4,500円',
				'<input type="submit" value="購入">'
				);
			?>
			<?php
				monoatouch(
				'JT-135G',
				'片持ちシャフト<br>（トライアンフ28）',
				'2005年以降にも適合',
				'3,800円',
				'<input type="submit" value="購入">'
				);
			?>
			<?php
				monoatouch(
				'JT-135M',
				'片持ちシャフト<br>(BMW53）',
				'Ｋ1200＆1300Ｓ/Ｒ<br>・R1200S/R ・HP2等',
				'8,000円',
				'<input type="submit" value="購入">'
				);
			?>
			<?php
				monoatouch(
				'JT-135J',
				'片持ちシャフト<br>（ドゥカティ41）',
				'パニガーレ<br>1098↓<br>’07後期と’08以降1098・1198(全年式)<br>（※ご購入前に必ず穴径をご確認ください。）<br>ディアベル<br>ストリートファイター1098<br>ムルティストラーダ1200',
				'7,500円',
				'<input type="submit" value="購入">'
				);
			?>
			<?php
				monoatouch(
				'JT-135K',
				'片持ちシャフト<br>（MVアグスタ43）',
				'MVアグスタ・’07ドゥカティ1098初期型<br>（※ご購入前に必ず穴径をご確認ください。）',
				'7,500円',
				'<input type="submit" value="購入">'
				);
			?>

			</table>
			</div>
		</div>
		
		<?php include "footer.php"; ?>
		
	</body>
</html>