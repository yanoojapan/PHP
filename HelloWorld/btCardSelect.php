<meta charset="UTF-8">
<?php
// Computerの処理
print("btCardsRandom.php <br>\n");

// カードの全種類を配列へ代入する
$cards = array("s01", "s02", "s03", "s04", "s05", "s06", "s07", "s08", "s09", "s10", "s11", "s12", "s13", "h01", "h02", "h03", "h04", "h05", "h06", "h07", "h08", "h09", "h10", "h11", "h12", "h13", "c01", "c02", "c03", "c04", "c05", "c06", "c07", "c08", "c09", "c10", "c11", "c12", "c13", "d01", "d02", "d03", "d04", "d05", "d06", "d07", "d08", "d09", "d10", "d11", "d12", "d13");

// 引数：Computerの現在の合計点、$cards
// 戻り値：false、または、ランダムに選択されたカード。

// Computerがカードをめくるか否かを判断する。
$score = 17;
$target_score = 19;

// $score >= $target_score の場合はカードを引かない（falseを返す）
if ($score >= $target_score){
	//print("確実");
	print("false<br>\n");

// $score < $target_score-9 の場合はランダムなカードを返す。
} else if ($score < $target_score - 9) {
	//print("確実");
	print ($cards[array_rand($cards)] . "<br>\n");
	
// 合計点によりカードを引く確率を変化させる配列を作る。要素は10個。
} else {
	$prob_array = array();
	for ($i = 0; $i < 10 ;$i++){
		if ($i < $target_score - $score) {
		//print ("ループしてる：1<br>\n");
			array_push($prob_array,"1");
		} else {
		//print ("ループしてる：0<br>\n");
			array_push($prob_array,"0");
		}
	}
	
	// 0ならカードを引かない。1ならカードを引く。
	if ($prob_array[array_rand($prob_array)] == 0){
		print ("false<br>\n");
	} else{
		print ($cards[array_rand($cards)]);
	}
}
?>
