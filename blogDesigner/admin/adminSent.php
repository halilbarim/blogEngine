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
		
				<?php if($_POST){  updateData($_GET['id']); }?>

		<div id="middle">



			<div id="toolBar">
				<div class="profil">

					<label>HOŞGELDİNİZ:</label>HALİL BARIM
				</div>
				<div id="profilTools">
				
					<a class="commentYazilarim" href="adminTools.php">Geri Dön</a>
							
				</div>
				
			</div>
			<br>
			<form name="form" method="post" >
				<?php $id=$_GET['id']; $data=searchId($id); foreach ($data as $key) { ?>
					
	
					<div id="sentBox">
						<div id="upperBox">
							<label id="label">BAŞLIK</label>
							<input id="inputHead" name="inputHead" type="text" value="<?php echo $key->head; ?>">
							<input id="submitButton" type="submit" value="Kaydet"> 
						</div>
						<div id="middleBox">
							<textarea id="textAreaBox" name="textAreaBox" ><?php echo $key->text; ?></textarea>

						</div>
						
					</div>
				<?php } ?>


			</form>
		</div>
		
		<div id="bottom">
			
			<p class="info">Bu Web Sitesi Halil Barım Tarafından Yapılmıştır...</p>
		</div>
		
	</div>
</body>
</html>



	
