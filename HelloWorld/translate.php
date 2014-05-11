<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>canvasで図形を描く</title>
		<script type="text/javascript">
			<!--
			function test() {
				//描画コンテキストの取得
				var canvas = document.getElementById('sample');
				if (canvas.getContext) {
					var context = canvas.getContext('2d');
					//ここに具体的な描画内容を指定する
					//左から20上から20の位置に幅50高さ50の輪郭の四角形を描く
					context.strokeRect(20, 20, 50, 50);

					//水平方向に100垂直方向に50移動した上で、
					//左から20上から20の位置に幅50高さ50の塗りつぶしの四角形を描く
					context.translate(100, 50);
					context.fillRect(20, 20, 50, 50);
				}
			}

			//-->
		</script>
	</head>
	<body onLoad="test()">
		<h2>Canvasで図形を描く</h2>
		<canvas width="300" height="150" id="sample" style="background-color:yellow;">
			図形を表示するには、canvasタグをサポートしたブラウザが必要です。
		</canvas>
	</body>
</html>