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
				<a href="../yazilarim.php" class="but">YAZILARIM</a>
				<a href="../hakkimda.php" class="but">HAKKIMDA</a>
				<a href="../iletisim.php" class="but">İLETİŞİM</a>
			</div>
		</div>
		
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
				
					
				
					<div id="sentBox">
						<div id="upperBox">
							<label id="label">BAŞLIK</label>
							<input id="inputHead" name="inputHead" type="text" value="">
							<input id="submitButton" type="submit" value="Kaydet"> 
						</div>
						<div id="middleBox">
							<textarea id="textAreaBox" name="textAreaBox" ></textarea>

						</div>
						
					</div>
				


			</form>
		</div>
		
		<div id="bottom">
			
			<p class="info">Bu Web Sitesi Halil Barım Tarafından Yapılmıştır...</p>
		</div>
		
	</div>
</body>
</html>

<?php 

	if($_POST){

		sentData();



	}
