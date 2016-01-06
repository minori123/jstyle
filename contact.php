<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="./css/style.css">
		<title>（仮）JTRIPオフィシャルサイト</title>
	</head>
	<body>
		<?php include "header.php" ?>
		
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
						<!--<h3>ご用件</h3>
						<p>
							<select name="ご用件">
									<option value>選択してください</option>
									<option value="製品についてのご質問・お問い合わせ">製品についてのご質問・お問い合わせ</option>
									<option value="ホームページについて">ホームページについて</option>
							</select>
						</p>
						<h3>お名前</h3>
						<p><input size="20" type="text" name="名前" placeholder="山田　太郎" required></p>
						-->
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
								<input size="20" type="text" name="email" placeholder="j-trip@a.com">
							</td>
						</tr>
						<tr>
							<th>お問い合わせ内容</th>
							<td>
								<textarea name="お問い合わせ内容" cols="50" rows="5"></textarea>
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
		
		<?php include "footer.php"; ?>
		
	</body>
</html>