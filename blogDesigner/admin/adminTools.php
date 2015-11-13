<DOCTYPE! hmtl>
<html>
<meta charset="utf-8">
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="../css/styleCss.css">
	
	
</head>
<body id="govde">
	<?php include '../blogPdo.php'; ?>
	<div id="container">
		<div id="upper">
			<div id="menu">
				<a href="../index.php" class="but">ANA SAYFA</a>
				<a href="#" class="but">YAZILARIM</a>
				<a href="../hakkimda.php" class="but">HAKKIMDA</a>
				<a href="../iletisim.php" class="but">İLETİŞİM</a>
			</div>
		</div>
		
		<div id="middle">

			<div id="toolBar">
				<div class="profil">

					<label>HOŞGELDİNİZ:</label> <?php session_start(); foreach ($_SESSION['userData'] as $key=>$value ) {
						echo $value;
					} ?>
				</div>
				<div id="profilTools">
				
					<a class="commentYazilarim" href="adminAdd.php">EKLE</a>
							
				</div>
				
			</div>
			<br>
		<?php $data=getData(); foreach ($data as $key) { $id=$key->id; $head=$key->head; $text=$key->text; ?>	
			
			 	<div id="line">
					<div id="headYazilarim"><?php echo $key->head; 	?></div>
					<form name="tools" method="post" action="">
						<div id="lowContentYazilarim">

								
								<a href="adminSent.php?id=<?php echo $key->id; ?>" class="commentYazilarim">Düzenle</a>
								<button type="submit" name="silinecekVeri" value="<?php echo $key->id; ?>"  style="background-color:#212121;" class="commentYazilarim">
									Sil </button>
								<!--<a href="#" adminSent.php?$id=<?php $key->id;?> class="commentYazilarim">Sil</a>-->

						</div>
					</form>
				</div><br>
			
		<?php } ?>
		</div>
		
		<div id="bottom">
			<p class="info">Bu Web Sitesi Halil Barım Tarafından Yapılmıştır...</p>
		</div>
		
	</div>
</body>
</html>
<?php 

if ($_POST) {
	deleteData($_POST['silinecekVeri']);
	header("Refresh:0");

}




