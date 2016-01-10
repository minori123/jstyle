<?php
/*商品*/
	function prod_1_red($title,$price,$pic,$s_title,$introduction){
		echo '<div class="prod clearfix">';
			echo '<div class="title clearfix">';
				echo '<h3>'.$title.'</h3>';
				echo '<h3>'.$price.'</h3>';
			echo '</div>';
			echo '<div class="prodphoto">';
				echo '<img src="./img/prod/'.$pic.'" width="100%" height="auto" alt="'.$title.'">';
				echo '<table>';
					echo '<tr>';
						echo '<td><a href="./bracket.php">受け金具</a></td>';
						echo '<td><a href="./options_rear.php">オプション</a></td>';
						echo '<td><a href="./howtouse.php">動画</a></td>';
					echo '</tr>';
				echo '</table>';
			echo '</div>';
			echo '<div class="prodtext">';
				echo '<p>'.$s_title.'</p>';
				echo '<p>'.$introduction.'</p>';
				echo '<p>カラー</p>';
				echo '<table>';
					echo '<tr>';
						echo '<td class="design red">RD</td>';
					echo '</tr>';
					echo '<tr>';
						echo '<td><input type="submit" value="購入"></td>';
					echo '</tr>';
				echo '</table>';
			echo '</div>';
		echo '</div>';
	}

	function prod_2($title,$price,$pic,$s_title,$introduction,$caution){
		echo '<div class="prod clearfix">';
			echo '<div class="title clearfix">';
				echo '<h3>'.$title.'</h3>';
				echo '<h3>'.$price.'</h3>';
			echo '</div>';
			echo '<div class="prodphoto">';
				echo '<img src="./img/prod/'.$pic.'" width="100%" height="auto" alt="'.$title.'">';
				echo '<table>';
					echo '<tr>';
						echo '<td><a href="./bracket.php">受け金具</a></td>';
						echo '<td><a href="./options_rear.php">オプション</a></td>';
						echo '<td><a href="./howtouse.php">動画</a></td>';
					echo '</tr>';
				echo '</table>';
			echo '</div>';
			echo '<div class="prodtext">';
				echo '<p>'.$s_title.'</p>';
				echo '<p>'.$introduction.'</p>';
				echo '<p>'.$caution.'</p>';
				echo '<p>カラー</p>';
				echo '<table>';
					echo '<tr>';
						echo '<td class="design red">RD</td>';
						echo '<td class="design white">WT</td>';
					echo '</tr>';
					echo '<tr>';
						echo '<td><input type="submit" value="購入"></td>';
						echo '<td><input type="submit" value="購入"></td>';
					echo '</tr>';
				echo '</table>';
			echo '</div>';
		echo '</div>';
	}


	function prod_3($title,$price,$pic,$cap,$s_title,$introduction,$caution){
		echo '<div class="prod clearfix">';
			echo '<div class="title clearfix">';
				echo '<h3>'.$title.'</h3>';
				echo '<h3>'.$price.'</h3>';
			echo '</div>';
			echo '<div class="prodphoto">';
				echo '<img src="./img/prod/'.$pic.'" width="100%" height="auto" alt="'.$title.'">';
				echo '<p>'.$cap.'</p>';
				echo '<table>';
					echo '<tr>';
						echo '<td><a href="./bracket.php">受け金具</a></td>';
						echo '<td><a href="./options_rear.php">オプション</a></td>';
						echo '<td><a href="./howtouse.php">動画</a></td>';
					echo '</tr>';
				echo '</table>';
			echo '</div>';
			echo '<div class="prodtext">';
				echo '<p>'.$s_title.'</p>';
				echo '<p>'.$introduction.'</p>';
				echo '<p>'.$caution.'</p>';
				echo '<p>カラー</p>';
				echo '<table>';
					echo '<tr>';
						echo '<td class="design red">RD</td>';
						echo '<td class="design white">WT</td>';
						echo '<td class="design color_w black">BK</td>';
					echo '</tr>';
					echo '<tr>';
						echo '<td><input type="submit" value="購入"></td>';
						echo '<td><input type="submit" value="購入"></td>';
						echo '<td><input type="submit" value="購入"></td>';
					echo '</tr>';
				echo '</table>';
			echo '</div>';
		echo '</div>';
	}

	function prod_5($title,$price,$pic,$cap,$s_title,$introduction,$caution){
		echo '<div class="prod clearfix">';
			echo '<div class="title clearfix">';
				echo '<h3>'.$title.'</h3>';
				echo '<h3>'.$price.'</h3>';
			echo '</div>';
			echo '<div class="prodphoto">';
				echo '<img src="./img/prod/'.$pic.'" width="100%" height="auto" alt="'.$title.'">';
				echo '<p>'.$cap.'</p>';
				echo '<table>';
					echo '<tr>';
						echo '<td><a href="./bracket.php">受け金具</a></td>';
						echo '<td><a href="./options_rear.php">オプション</a></td>';
						echo '<td><a href="./howtouse.php">動画</a></td>';
					echo '</tr>';
				echo '</table>';
			echo '</div>';
			echo '<div class="prodtext">';
				echo '<p>'.$s_title.'</p>';
				echo '<p>'.$introduction.'</p>';
				echo '<p>'.$caution.'</p>';
				echo '<p>カラー</p>';
				echo '<table>';
					echo '<tr>';
						echo '<td class="design green">LG</td>';
						echo '<td class="design red">RD</td>';
						echo '<td class="design orange">QR</td>';
						echo '<td class="design white">WT</td>';
						echo '<td class="design color_w black">BK</td>';
					echo '</tr>';
					echo '<tr>';
						echo '<td><input type="submit" value="購入"></td>';
						echo '<td><input type="submit" value="購入"></td>';
						echo '<td><input type="submit" value="購入"></td>';
						echo '<td><input type="submit" value="購入"></td>';
						echo '<td><input type="submit" value="購入"></td>';
					echo '</tr>';
				echo '</table>';
			echo '</div>';
		echo '</div>';
	}

	

/*商品・受け具*/
	function bracket_1($p_name,$price,$image,$caution,$title,$introduction){
		echo '<div class="prod clearfix">';
			echo '<div class="title clearfix">';
				echo '<h3>'.$p_name.'</h3>';
				echo '<h3>'.$price.'</h3>';
			echo '</div>';
			echo '<div class="prodphoto">';
				echo '<img src="./img/prod/bracket/'.$image.'"　alt="'.$p_name.'">';
				echo '<p>'.$caution.'</p>';
			echo '</div>';
			echo '<div class="prodtext">';
				echo '<p>'.$title.'</p>';
				echo '<p>'.$introduction.'</p>';
				echo '<p><input type="submit" value="購入"></p>';
			echo '</div>';
		echo '</div>';
	}

	function bracket_2($p_name,$price,$image,$title,$introduction){
		echo '<div class="prod clearfix">';
			echo '<div class="title clearfix">';
				echo '<h3>'.$p_name.'</h3>';
				echo '<h3>'.$price.'</h3>';
			echo '</div>';
			echo '<div class="prodphoto">';
				echo '<img src="./img/prod/bracket/'.$image.'"　alt="'.$p_name.'">';
			echo '</div>';
			echo '<div class="prodtext">';
				echo '<p>'.$title.'</p>';
				echo '<p>'.$introduction.'</p>';
				echo '<p><input type="submit" value="購入"></p>';
			echo '</div>';
		echo '</div>';
	}

/*商品・片持ち*/
	function monoatouch($num1,$num2,$num3,$num4,$num5){
	echo '<tr>';
		echo '<td>'.$num1.'</td>';
		echo '<td>'.$num2.'</td>';
		echo '<td>'.$num3.'</td>';
		echo '<td>'.$num4.'</td>';
		echo '<td>'.$num5.'</td>';
	echo '</tr>';
	}

/*イベントスケジュール*/
	function schedule($date,$place,$event){
		echo '<tr>';
			echo '<td class="date">'.$date.'</td>';
			echo '<td class="place">'.$place.'</td>';
			echo '<td class="event">'.$event.'</td>';
		echo '</tr>';
	}

/*会社概要*/
	function company($th,$td){
		echo "<tr>";
			echo "<th>".$th."</th>";
			echo "<td>".$td."</td>";
		echo "</tr>";
	}

	
	