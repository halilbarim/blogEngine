<DOCTYPE! hmtl>
<html>
<meta charset="utf-8">
<head>
	<title>Admin Giriş</title>
	<link rel="stylesheet" type="text/css" href="../css/styleCss.css">

<script type="text/javascript">
	
	function bekle(){
    	window.location = "adminTools.php"
	}
</script>



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
			<div id="login">
				<form action="" method="post">
					<table>
						
						<tr>
							<td><label>Kullanıcı Adı:</label></td>
							<td><input class="logininput" type="text" name="userName"></td>


						</tr>
						<tr>
							<td><label>Şifre:</label></td>
							<td><input class="logininput" type="text" name="userPass"></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" id="loginButton" value="Giriş"></td>

						</tr>

							
						
							

						
					</table>
				</form>
			
			</div>
		</div>
		
		<div id="bottom">
			<p class="info">Bu Web Sitesi Halil Barım Tarafından Yapılmıştır...</p>
		</div>
		
	</div>
</body>
</html>
	
<?php 

/**
*
*@param this code  only for login 
* but dont complete
*
*/

if ($_POST) {



	$data=loginSql();
	foreach ($data as $key) {
		
		$userName=$key->userName;
		$userPass=$key->userPass;


	}

	if ($userName==$_POST['userName'] && $userPass==$_POST['userPass']) {

		echo "giriş başarılı";
		session_start();
		$userData=array($userName);
		$_SESSION['userData']=$userData;
		?>
		<script type="text/javascript">

		bekle();

		</script>



		<?php

	}
	else echo "giriş başarısız";

 
 } 





