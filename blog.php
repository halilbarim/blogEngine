<meta charset="utf-8">


<?php 

//todo: continue from search function : no
//todo: add delete function : yes
//todo: add update funtion  : yes
//todo: design generateTable function : no


/**
 * @param this function main data transfer center
 * 
 */
function sql($sql,$args = [])
{
	try{

		$db = new PDO("mysql:host=localhost;dbname=blog","root","");
		//sorgumuz $query içine $db ile beraber hazırlanıyor
		$query = $db->prepare($sql);
		//$query $args ile execute ediliyor
		$query->execute($args);
		//$collection içine bütün data çekiliyor
		$collection = $query->fetchAll(PDO::FETCH_OBJ);
		
		return $collection;
		
	}
	catch (PDOexception $e){

		print $e->getMessage();

	}
}

/**
 * @param connect db
 * 
 * */

function connectDb(){	
	try{

		$db = new PDO("mysql:host=localhost;dbname=blog","root","");
		//echo "succes";

		return $db;
	}
	catch (PDOexception $e){

		print $e->getMessage();

	}

}

/**
 * @param sent text or data for db
 * 
 * */


function sentData(){



		sql('Insert into texttable(head,text,public) Values(?,?,?)',[$head,$text,$public]);


}



/**
 * @param get text or data from database
 * @param all get data
 * */
function getData(){

	$data=sql('select * from texttable ');


		return $data;

}
/**
 * @param search data from uyeler table
 * 
 * 
 */

function loginSql(){

	//var_dump($_POST);	
	$userName=$_POST["userName"];
	$userPass=$_POST["userPass"];
	$data=sql('SELECT * FROM uyeler ');
	//AND `admin` = 2
	
		foreach ($data as $key) {
				
				
				if($userName==$key->userName && $userPass==$key->userPass )
				{
					return 'true';
				}
				
			
		}


}



/**
 * @param data list for view
 * @param dont just complete
 * 
 * */
function search(){

		//$ara   = $db->prepare("SELECT * FROM kullanici_bilgileri WHERE ad LIKE ? LIMIT 10");


		//$sqlTest='SELECT * FROM `uyeler` WHERE `userName` LIKE '%userName%' AND `userPass` LIKE '%userPass%' AND `admin` != 2';


		//$userName=$_POST['userName'];
		//$userPass=$_POST['userPass'];

		$userName='adminRoot';
		$userPass='root';
		//$data=sql('select * from uyeler where userName and userPass like ?',[$userName,$userPass]);
		$data=sql("SELECT * FROM 'uyeler' WHERE 'userName' LIKE '?' AND 'userPass' LIKE '?' AND 'admin' = 2",[$userName,$userPass]);

		var_dump($data);



}








/**
 * @param delete from db
 * 
 * */

function deleteData($i){



	sql(" DELETE FROM texttable  WHERE id='$i' ");

}

/**
 * @param update data from db
 * todo: prepare post variable
 */
function updateData($id){

	$head="degisti"; 
	


	sql("UPDATE `texttable` SET `head`='$head' WHERE  `id`=$id");


}






/**
 * @param create <tr> from view
 * @param this function is disable at now
 * */

function generateTable($array){

    $id=$array['id'];	
	$head=$array['head'];
	$text=$array['text'];
	$public=$array['public'];
	echo "<br>";


	


	echo "			

					<tr>
						<h4 id='baslik'>$id</h4>
					</tr>
	        		<tr>
	        			<p id='metin'>$head alanı</p>
					</tr>
					<tr>
	        			<p id='metin'>$text alanı</p>
					</tr>
					<tr>
	        			<p id='metin'>$public alanı</p>
					</tr>





	     ";



}

/**
 * 
 *@param count from getting data and convert array 
 * 
 */
 

function counting(){

			

				$data=getData();

				//print_r($data[0]);
				$array = (array)$data;
				    	

						
					
				    
				    for($i=0;$i<count($data); $i++){


						$array = (array)$data[$i];
				    	generateTable($array);
						echo "<br>";
				    }
					
				
	

	



}

/**
 * @param tester functions
 * 
 */

/*$head='deneme2';
$text='asdmalsdmİPFNLSDNFALŞNDLŞANDFMİSAMŞMDSŞAFSM0';
$public=1;
//test functions
//connectDb();


$head='deneme3500';
$text='textmetin';
$public='6631';
sentData($head,$text,$public);


$data = sql('Select * from texttable');
var_dump($data);
*/

//generateTable();
//counting();
//search();

//deleteData();
//updateData(1);
?>