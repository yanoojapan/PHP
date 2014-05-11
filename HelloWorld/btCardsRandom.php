<?php
// カードの全種類を配列へ代入する
$cards = array("s01", "s02", "s03", "s04", "s05", "s06", "s07", "s08", "s09", "s10", "s11", "s12", "s13", "h01", "h02", "h03", "h04", "h05", "h06", "h07", "h08", "h09", "h10", "h11", "h12", "h13", "c01", "c02", "c03", "c04", "c05", "c06", "c07", "c08", "c09", "c10", "c11", "c12", "c13", "d01", "d02", "d03", "d04", "d05", "d06", "d07", "d08", "d09", "d10", "d11", "d12", "d13");
var_dump(array_values($cards));
print("<br>\n");
// 配列の要素がなくなるまで繰り返す
while (count($cards) > 0) {
  // 配列の要素数を取得
  //echo count($cards) . "\n";

  // ランダムに配列のキーを取得する
  $rand_key = array_rand($cards);

  // 配列のキーからカードの種類を取得する
  $selected_card = $cards[$rand_key];

  // 選択したカードを表示する
  echo $selected_card . "\n";

  // 選択したカードを配列から削除する
  unset($cards[$rand_key]);
}

?>
