<DOCTYPE! hmtl>
<html>
<meta charset="utf-8">
<head>
	<title>Yazılarım</title>
	<link rel="stylesheet" type="text/css" href="css/styleCss.css">
</head>
<body id="govde">
	<?php include 'blogPdo.php'; ?>
	<div id="container">
		<div id="upper">
			<div id="menu">
				<a href="index.php" class="but">ANA SAYFA</a>
				<a href="#" class="but">YAZILARIM</a>
				<a href="hakkimda.php" class="but">HAKKIMDA</a>
				<a href="iletisim.php" class="but">İLETİŞİM</a>
			</div>
		</div>
		
		<div id="middle">
		<?php $data=getData(); foreach ($data as $key) { ?>	
			
			 	<div id="line">
					<div id="headYazilarim"><?php echo $key->head; ?></div>
					
					<div id="lowContentYazilarim">

							
							<a href="#" class="commentYazilarim">Oku</a>
							

					</div>
				</div><br>
			
		<?php } ?>
		</div>
		
		<div id="bottom">
			<p class="info">Bu Web Sitesi Halil Barım Tarafından Yapılmıştır...</p>
		</div>
		
	</div>
</body>
</html>