DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>（仮）JTRIPオフィシャルサイト</title>

		<link type="text/css" rel="stylesheet" href="./css/style.css">
		<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="./js/main.js"></script>
		<link href='https://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	</head>
	<body>
		<?php include "header.php"; ?>
		
		<?php include "bars.php"; ?>
		
		<div class="top">
			<div class="top_inside">
				<h3>製品情報</h3>
			</div>
		</div>
		
		<div class="products">
			<h3 id="biginner">(スタンドデビューさんには)初めてスタンド</h4>
			<div id="p_down" class="p_down base_color">
				<i class="fa fa-angle-double-down"></i>
			</div>
			<ul id="nav" class="nav clearfix">
				<li id="nav_rear" class="base_color">リア</li>
				<li id="nav_front" class="base_color">フロント</li>
				<li id="nav_mini" class="base_color">ミニバイク</li>
				<li id="nav_motard" class="base_color">オフ・モタード<br>ステップ</li>
				<li id="nav_others" class="base_color">その他</li>
			</ul>
<!-------------------左下ナビゲーション---------------------->
			<div id="side_nav" class="side_nav base_color">
				<ul>
				<li id="lnav_rear">リア</li>
				<li id="lnav_front">フロント</li>
				<li id="lnav_mini">ミニバイク</li>
				<li id="lnav_motard">オフ・モタード<br>ステップ</li>
				<li id="lnav_others">その他</li>
				</ul>
			</div>
<!-------------------トップへ戻るボタン---------------------->			
			<div id="arrow" class="go_top">
				<i class="fa fa-arrow-up"></i>
			</div>

<!-------------------リアスタンド---------------------------->
			<div class="product">
				<h3 id="rear">リア</h3>
				<?php include "functions.php"; ?>
				<?php 
					prod_5(
					'ナローローラースタンド【JT-1052】',
					'9,000円(税別)',
					'jt_1052.jpg',
					'受け金具は付属していません。用途に合わせて別途お買い求めください。',
					'50ccから400ccクラスまでの車両にジャストフィット！',
					'通常のスタンドよりも幅を50mm狭くしました。別売りのV受け(107A2)またはL受け(104L4)等と組み合わせてご使用ください。',
					'**ご注意**<br>オートバイの後部にスタンド本体が長く延びますので、作業中つまづいたりしないようにお気をつけください。'
					);
				?>
				<?php 
					prod_5(
					'ローラースタンド【JT-120】',
					'11,000円(税別)',
					'jt_120.jpg',
					'受け金具は付属していません。用途に合わせて別途お買い求めください。',
					'軽い力でらくらくリフト！<br>「ロングローラースタンド」',
					'女性でもらくらくリフト可能なロングローラースタンドが定番商品となりました。<br>リッターバイクなどの重量車に特にお勧めです。',
					'**ご注意**<br>オートバイの後部にスタンド本体が長く延びますので、作業中つまづいたりしないようにお気をつけください。'
					);
				?>
				<?php 
					prod_5(
					'ショートローラースタンド【JT-125】',
					'11,000円(税別)',
					'jt_125.jpg',
					'受け金具は付属していません。用途に合わせて別途お買い求めください。',
					'コンパクト設計で輸送時も安心。スタンドの決定版「ショートローラースタンド」',
					'コンパクト設計でトランスポーターにも使用可能。収納時も場所をとりません。',
					'**ご注意**<br>重量車に用いますと若干リフトが重くなります。<br>一部車種にはワイドショートローラースタンドをご使用ください。'
					);
				?>
				<?php 
					prod_4(
					'ワイドショートローラースタンド【JT-125P】',
					'12,000円(税別)',
					'jt_125p.jpg',
					'受け金具は付属していません。用途に合わせて別途お買い求めください。',
					'コンパクト設計で輸送時も安心。スタンドの決定版「ショートローラースタンド」',
					'ショートローラースタンドをZRX、New V-MAX、DUCATI スポーツクラシックシリーズ各種に対応する為に幅を拡張したモデルです。',
					'**ご注意**<br>ZRXにつきましては専用V受けをご用意しております。'
					);
				?>
				<?php 
					prod_3(
					'片持ちローラースタンド【JT-136】',
					'12,500円(税別)',
					'jt_136.jpg',
					'受け金具は付属していません。用途に合わせて別途お買い求めください。',
					'片持ちスイングアームでも安心<br>「片持ちスタンド」',
					'支持シャフトの角度を吟味しリフトの軽さと安定性を実現。十分な強度を持ちながらディスプレイスタンドとしても十分鑑賞に堪える美しいパイプワークも魅力。<br><p><a href="./img/prod/sidearmshaft201404.pdf" target="_blank">適合表</a></p>',
					'**ご注意**<br>17インチ車専用品につき18インチ車でご利用になれません。18インチ車へは片持ちスタンドJT-135をご利用ください。'
					);
				?>
				<?php 
					prod_3(
					'片持ちローラースタンド【JT-137】',
					'12,500円(税別)',
					'logo.jpg',
					'受け金具は付属していません。用途に合わせて別途お買い求めください。',
					'片持ちスイングアームでも安心<br>「片持ちスタンド」',
					'片持ちスタンドJT-136を右スイングアーム用にしたものです。現在適合車種はBMW各車とホンダRS250のみです。',
					'**ご注意**<br>BMW専用品とお考え下さい。なお、BMW K1200R/Sには適合いたしません。'
					);
				?>

				<div class="prod clearfix">
					<div class="title clearfix">
						<h3>片持ちローラースタンド【JT-135】</h3>
						<h3>9,500円(税別)</h3>
					</div>
					<div class="prodphoto">
						<img src="./img/prod/jt_135.jpg" width="100%" height="auto" alt="片持ちローラースタンド">
						<p>受け金具は付属していません。用途に合わせて別途お買い求めください。</p>
						<table>
							<tr>
								<td><a href="./bracket.php">受け金具</a></td>
								<td><a href="./options_rear.php">オプション</a></td>
								<td><a href="./howtouse.php">動画</a></td>
							</tr>
						</table>
					</div>
					<div class="prodtext">
						<p>片持ちスイングアームでも安心<br>「片持ちスタンド」</p>
						<p>片持ちローラースタンドJT-136のローラーを省いたものです。抜群の安定性でディスプレイに好適。リーズナブルな価格も魅力。18インチ対応の為リフト量が大きく、17インチ車を懸架する場合、他の製品に比べて少々重たく感じられる場合があります。</p>
						<p>カラー</p>
						<table>
							<tr>
								<td class="design white">WT</td>
							</tr>
							<tr>
								<td><input type="submit" value="購入"></td>
							</tr>
						</table>
					</div>
				</div>
				
<!---------------フロントスタンド---------------->

				<h3 id="front">フロント</h3>
				<div class="prod clearfix">
					<div class="title clearfix">
						<h3>フロントスタンド【JT-116】</h3>
						<h3>19,500円(税別)</h3>
					</div>
					<div class="prodphoto">
						<img src="./img/prod/jt_116.jpg" width="100%" height="auto" alt="片持ちローラースタンド">
						<table>
							<tr>
								<td><a href="./bracket.php">受け金具</a></td>
								<td><a href="./howtouse.php">動画</a></td>
							</tr>
						</table>
					</div>
					<div class="prodtext">
						<p>安定感で選ぶなら「フロントスタンド」</p>
						<p>ステアリングステムにφ13ｍｍ以上の穴があいている、アメリカン・オフロード以外の車種であればほぼ全機種をリフト可能なフロントスタンドです。</p>
						<p>**ご注意**<br>構造上リフトしたまま三又を外す事は出来ません。また一部制約のある車種があります。</p>
						<p>カラー</p>
						<table>
							<tr>
								<td class="design green">LG</td>
								<td class="design red">RD</td>
								<td class="design orange">QR</td>
								<td class="design white">WT</td>
								<td class="design color_w black">BK</td>
							</tr>
							<tr>
								<td><input type="submit" value="購入"></td>
								<td><input type="submit" value="購入"></td>
								<td><input type="submit" value="購入"></td>
								<td><input type="submit" value="購入"></td>
								<td><input type="submit" value="購入"></td>
							</tr>
						</table>
					</div>
				</div>

				<div class="prod clearfix">
					<div class="title clearfix">
						<h3>フォークアップスタンド【JT-113】</h3>
						<h3>11,750円(税別)</h3>
					</div>
					<div class="prodphoto">
						<img src="./img/prod/jt_113.jpg" width="100%" height="auto" alt="片持ちローラースタンド">
						<table>
							<tr>
								<td><a href="./bracket.php">受け金具</a></td>
								<td><a href="./howtouse.php">動画</a></td>
							</tr>
						</table>
					</div>
					<div class="prodtext">
						<p>優れた汎用性であらゆるマシンをリフトする「フォークアップスタンド」</p>
						<p>フォークボトムにφ8ｍｍ以上の穴があいていればほぼ全ての車種をリフト可能なフロントスタンドです。<br>左右の幅調整は無段階・左右とも独立して高さ調整も無段階です。（実用新案登録　第3074529号）</p>
						<p>**ご注意**<br>構造上リフトしたままフォークを外す事は出来ません。フォークのOHにはフロントスタンドJT-116をお勧めいたします。</p>
						<p>カラー</p>
						<table>
							<tr>
								<td class="design red">RD</td>
								<td class="design white">WT</td>
								<td class="design color_w black">BK</td>
							</tr>
							<tr>
								<td><input type="submit" value="購入"></td>
								<td><input type="submit" value="購入"></td>
								<td><input type="submit" value="購入"></td>
							</tr>
						</table>
					</div>
				</div>
				<?php 
					prod_1_red(
					'DUCATI専用フロントスタンド【JT-113DRD】',
					'12,000円(税別)',
					'jt_113drd.jpg',
					'専用設計ならではの使いやすさ',
					'ステアリングステムに穴がないDUCATI専用品。キャリパーサポートで支持しますので安定感も抜群。<br>適応車種は<a href="">こちら</a>からご確認下さい。'
					);
				?>



<!---------------ミニスタンド---------------->
				<h3 id="mini">ミニ</h3>
				<div class="info">
					<h3>お知らせ</h3>
					<p>
					ミニバイク専用リアスタンドは販売終了しました。<br>
					後継モデルは<a href="">ナローローラースタンド【JT-1052】</a>です。<br><br>
					</p>
				</div>
				<?php 
					prod_2(
					'ミニフロントスタンド【JT-116S】',
					'16,000円(税別)',
					'jt_116s.jpg',
					'ミニバイク専用設計「ミニフロントスタンド」',
					'ステアリングステムにφ13ｍｍ以上の穴があいている、アメリカン・オフロード以外の車種であればほぼ全機種をリフト可能なフロントスタンドです。',
					'**ご注意**<br>KSR50/80/110やエイプ50/100に使用する場合別売りブラケットが必要です。<br>（XR50/100モタード専用ブラケットは販売終了しました）<br>構造上リフトしたまま三又を外す事は出来ません。'
					);
				?>
				<?php 
					prod_2(
					'フォークアップスタンド【JT-113S】',
					'11,000円(税別)',
					'jt_113s.jpg',
					'優れた汎用性であらゆるマシンをリフトする「フォークアップスタンド」',
					'フォークボトムにφ8ｍｍ以上の穴があいていればほぼ全ての車種をリフト可能なフロントスタンドです。<br>左右の幅調整は無段階・左右とも独立して高さ調整も無段階です。 （実用新案登録　第３０７４５２９号）',
					'**ご注意**<br>構造上リフトしたままフォークを外す事は出来ません。フォークのOHにはフロントスタンドJT-116Sをお勧めいたします。'
					);
				?>
				<?php 
					prod_2(
					'ミニワンタッチスタンド【JT-115】',
					'8,500円(税別)',
					'jt_115.jpg',
					'簡単な構造ながら必要にして充分。<br>「ミニワンタッチスタンド」',
					'高さ３段階調整機構付きにすることにより、エイプやKSR、18インチまでのフルサイズの車種に適合。<br>ホイール径8インチ～18インチまで対応。先端部分のボスはベースがφ13で、φ15・φ17・φ22のカラーが付属します。',
					'**ご注意**<br>ノーマルフェンダーのモンキー・ゴリラ・エイプ・ＸＲモタードはフロントフェンダーを取り外す必要があります。'
					);
				?>


				
<!---------------オフ・モタード・その他---------------->
						<h3 id="motard">オフ・モタード・ステップ</h3>


<!---------------オプション---------------->
						<h3 id="others">その他</h3>
						
<!---------------はじめてスタンド---------------->
						<h3 id="biginner_set">はじめてスタンド</h3>

				<?php 
					prod_3(
					'はじめてスタンド',
					'14,500円(税別)',
					'biginner_set.jpg',
					'転倒の危険がありますので、片持ちスイングアーム車には絶対に使用しないでください。',
					'スタンドデビューならコレ！「はじめてスタンド」',
					'まったく初めての方でも、センタースタンドがけよりも安心してスタンドアップできる究極の超カンタンスタンド「はじめてスタンド」が、いま大ブレイク！<br>アクスルシャフトが中空のモデル（Φ9mm～）ならどなたでも安全確実にご利用になれます。',
					'**ご注意**<br>構造上オートバイをリフトしたままリアホイールが外れません。<br>スタンドがけをしたままリアホイールを外す場合は通常のローラースタンドにL受け（JT-104L)もしくはV受け（JT-107A)をご利用ください。'
					);
				?>
				
			</div>
		</div>
		
		<?php include "footer.php"; ?>
		
	</body>
</html>