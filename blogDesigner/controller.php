<?php 


/**
*
*@param this folder control data for system input and output...!
*@param prepare data for system...!
*
*
*
**/











	/**
	*
	*@param return client ip 
	*
	*
	*/

    


    
	function getUserIp(){

	$userIp=$_SERVER['REMOTE_ADDR'];
	
   


	
	$userIp=parseIp($userIp);


    return $userIp;

		 


	}


	/**
	*
	*@param user ip parse  from dot example: ip: 127001
	*
	*
	*
	**/
	function parseIp($ip){
		$array;
		$array=str_split($ip);
		

		
	
		for ($i=0; $i <= strlen($ip); $i++) {


				if(@$array[$i]!='.'){

				@$_new=$_new.$array[$i];

				}

			
			

		}
		return $_new;


	}

