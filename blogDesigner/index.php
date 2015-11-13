<DOCTYPE! hmtl>
<html>
<meta charset="utf-8">
<head>
	<title>Ana Sayfa</title>
	<link rel="stylesheet" type="text/css" href="css/styleCss.css">
</head>
<body id="govde">
	<?php include ("blogPdo.php"); ?>
	<div id="container">
		<div id="upper">
			<div id="menu">
				<a href="#" class="but">ANA SAYFA</a>
				<a href="yazilarim.php" class="but">YAZILARIM</a>
				<a href="hakkimda.php" class="but">HAKKIMDA</a>
				<a href="iletisim.php" class="but">İLETİŞİM</a>
			</div>
		</div>
		<?php  $data=getData();   

		foreach ($data as $key) {
		
		?>
		
		<div id="middle">
			<div id="head"><?php echo $key->head; ?></div>
			<div id="content"><?php echo $key->text; ?>

			</div>
			<div id="lowContent">

					
				<!--	<div class="comLeft">  Beğeni 0 Yorum</div> -->

					<a href="#" class="comment">Oku</a>
					
					<!--<a href="#" onclick="like();" class="comment"><?php 

					if(_checkIp()){

						echo "begenmekten vazgeç";


					}
					else echo "Beğen";

					 ?></a>-->

			</div>
		</div><?php } ?>
		
		<div id="bottom">
			<p class="info">Bu Web Sitesi Halil Barım Tarafından Yapılmıştır...</p>
		</div>

	</div>
</body>
</html>

<script type="text/javascript">


	

	/**
	*
	* this function check client ip return 0 or 1 
	*
	*/
	function like(){

			 
 		<?php //deleteData('1'); ?>

	}



</script>