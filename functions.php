<?php
/*
    Global Functions
    Author: Phil Wright
    Author URI: http://www.touchopia.com
*/

	/* function validateEmail($emailAddress){
		return  preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $emailAddress);
	} 
	
	function throwArray($errorcode,$message) {
		$retval = array();
		$arr["errorcode"] = $errorcode;
		$arr["message"] = $message;
		echo json_encode($arr);
		exit(0);
	}
	
	function throwValue($value) {
		$retval = new stdClass();
		$retval = $value;
		echo json_encode($retval);
		die;
	}

	function throwSuccess($message) {
		$retval = new stdClass();
		$retval->errorCode = "0";
		$retval->message = $message;
		echo json_encode($retval);
	}

	function throwError($message) {
		$retval = new stdClass();
		$retval->errorCode = "1";
		$retval->message = $message;
		echo json_encode($retval);
	}
	
	function formatYouTubeURL($url) {
		$regEx = "/v=(.*)&/";

		preg_match_all($regEx,$url,$matches);
		
		if(isset($matches[1][0]) && !empty($matches[1][0]))
			return $matches[1][0];
		
		$regEx = "/v=(.*)\$/";
		
		preg_match_all($regEx,$url,$matches);
		
		if(isset($matches[1][0]) && !empty($matches[1][0]))
			return $matches[1][0];		
			
		return $url;
	}
	
	function formatPhone($phoneNumber) {
		if(empty($phoneNumber))
			return "";

		$newPhone = preg_replace("/[^0-9]/","",$phoneNumber);
		
		if(strlen($newPhone)<8)
			return $newPhone;
		
		if(strlen($newPhone)<11) {
			$newPhone = "1$newPhone";
		}
		
		$first = substr($newPhone,0,1);
		$areacode = substr($newPhone,1,3);
		$prefix = substr($newPhone,4,3);
		$last = substr($newPhone,7,4);
		
		return $first."-".$areacode."-".$prefix."-".$last;
 	}

	function trap($var) {
		echo "<pre>";
		print_r($var);
		echo "</pre>";
	}
	
	function validate_input($var) {
		$return_pass = true;
		$array_fields = array_keys ($var);
		$error_str = "<div style='border:1px solid red;background:#ffe7e7;color:#000;'><ul style='margin-left:35px;'>";
		
		for($i=0; $i < sizeof($array_fields); $i++){
			$eval_field = trim($var["$array_fields[$i]"]);			
			if( $eval_field == "" ) {
				$error_str .="<li>The field <strong>".$array_fields[$i]."</strong> can't be left empty.</li>";
				$return_pass = false;
			}
		}
		$error_str .= "</ul></div>";		
		return  ($return_pass) ? "" : $error_str;
	}

	/***************************************************
	| Function Name:rgen2                              |
	| Arguments: accepts 1 argument1                   | 
	|  :num the length of the random number            |
	| Return value                                     |
	|  :returns                                        |
	|  :a random number 					           |
	|Desc Check if the random no is being used
	| by another user if so it regenerates the rno
	/**************************************************/

/*

	function rgen2($num){
		srand ((double) microtime() * 1000000);
		$rno="";
		for($i=1;$i<=$num;$i++){
				$a= rand(65,90);
				$rno.=chr($a);
		}
		$chk=mysql_query("SELECT * FROM users WHERE deviceToken='$rno'");
		if(mysql_num_rows($chk)>0){
			$rgen2($num);
		}
		return $rno;
	}

	function show_error($var) {
		$error_str = "<div style='border:1px solid red;background:#ffe7e7;color:#000;'><ul style='margin-left:35px;'>";
		$error_str .="<li><strong>".$var."</strong></li>";
		$error_str .= "</ul></div>";		
		return  $error_str;
		
	}
	
	function validate_numeric($param){
		$retvar = 0;
		if( trim($param) != '' ){
			if(is_numeric($param)){
				$retvar = $param;
			}
		}
		return $retvar;
	}
	
		/***************************************************
		| Function Name:retimagesize
		| Arguments: accepts 1 arguments                   | 
		|  :the array returned from getimagesize function
		| Return value                                     |
		|  array of height and width afetr html compression
		/**************************************************/

/*
		function retimagesize($imsz){
			$iheight=TB_HEIGHT;
			$iwidth=TB_WIDTH;
			$iwid = $imsz[0];
			$ihei = $imsz[1];
			if(($ihei>$iheight) && ($ihei>$iwid)){
				$cons=$ihei/$iwid;
				$height=$iheight;
				$width=number_format($iheight/$cons,2);
			}else if(($ihei>$iheight) && ($ihei<$iwid)){
				$cons=$iwid/$ihei;
				$width=$iwidth;
				$height=number_format($iwidth/$cons,2);
			}else if(($iwid>$iwidth) && ($ihei<$iwid)){
				$cons=$iwid/$ihei;
				$height=number_format($iwidth/$cons,2);
				$width=$iwidth;
			}else if(($iwid>$iwidth) && ($ihei>$iwid)){
				$cons=$ihei/$iwid;
				$height=$iheight;
				$width=number_format($iheight/$cons,2);
			}else{
				$width=$iwid;
				$height=$ihei;
			}
			return array($width,$height);
		}
        
        */
	?>