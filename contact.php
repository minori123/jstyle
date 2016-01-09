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
				<h3>お問い合わせ</h3>
			<div>
			<div class="article">
				<p>
					下記フォームに必要事項をご記入ください。<br>
					必須の項目は必ずご記入ください。
				</p>
				<form action="" method="">
					<table>
						<tr>
							<th>ご用件</th>
							<td>
								<select name="ご用件">
									<option value>選択してください</option>
									<option value="製品についてのご質問・お問い合わせ">製品についてのご質問・お問い合わせ</option>
									<option value="ホームページについて">ホームページについて</option>
								</select>
							</td>
						</tr>
						<tr>
							<th>お名前</th>
							<td>
								<input size="20" type="text" name="名前" placeholder="山田　太郎" required>
							</td>
						</tr>
						<tr>
							<th>電話番号</th>
							<td>
								<input size="20" type="text" name="電話番号" placeholder="01-2345-6789">
							</td>
						</tr>
						<tr>
							<th>Mail</th>
							<td>
								<input size="20" type="text" name="email" placeholder="j-trip@a.com" required>
							</td>
						</tr>
						<tr>
							<th>お問い合わせ内容</th>
							<td>
								<textarea name="お問い合わせ内容" cols="50" rows="5" required></textarea>
							</td>
						</tr>
					</table>
					<p class="submit"><input type="submit"></p>
				</form>
			</div>
		</div>
		
		<?php include "footer.php"; ?>
		
	</body>
</html>