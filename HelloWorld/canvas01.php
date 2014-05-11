<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta http-equiv="content-style-type" content="text/css">
<meta http-equiv="content-script-type" content="text/javascript">
<meta name="description" content="">
<meta name="keywords" content="">
<title>アニメーションのテスト</title>
<script type="text/javascript">
			window.onload = function() {
				//コンテキストの取得
				var canvas = document.getElementById("can");
				if (!canvas || !canvas.getContext)
					return false;
				var ctx = canvas.getContext("2d");
				ctx.fillStyle = "#ceceff";
				//描画色を指定

				//options
				var point = {
					x : 0,
					y : 0
				};
				//座標
				var par = {
					x : 4,
					y : 6
				};
				//変化量
				var timer;
				//タイマー
				var delay = 50;
				//タイマーを実行する間隔

				//描画処理を行う関数。loop()関数の中で呼び出す。
				function draw(x, y) {
					ctx.clearRect(0, 0, 600, 500);
					//一度canvasをクリア
					ctx.fillRect(x, y, 50, 50);
					//pointの座標に描画
				}

				//繰り返し描画を行う関数。
				var loop = function() {
					//pointの数値をparの分だけ増やす
					point.x = point.x + par.x;
					point.y = point.y + par.y;
					//描画処理を呼び出す
					draw(point.x, point.y);
					//タイマー(一度クリアしてから再設定。)
					clearTimeout(timer);
					timer = setTimeout(loop, delay);
				}
				loop();
			}
		</script>
<style type="text/css" media="screen">
div#stage {
	width: 600px;
	height: 500px;
	position: absolute;
	top: 50%;
	left: 50%;
	margin-left: -300px;
	margin-top: -250px;
	background: #000;
}
</style>

</head>

<body>
	<div id="stage">
		<canvas id="can" width="600" height="500"></canvas>
	</div>
</body>
</html>