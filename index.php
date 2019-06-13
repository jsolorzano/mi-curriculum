<?php

if(isset($_GET['lang'])){
	
	if($_GET['lang'] == "en" || $_GET['lang'] == "es"){
		
		include "php/lang/".$_GET['lang']."/menu.php";
		include "php/lang/".$_GET['lang']."/icons.php";
		include "php/lang/".$_GET['lang']."/language.php";
		include "php/lang/".$_GET['lang']."/titles.php";
		include "php/lang/".$_GET['lang']."/basic.php";
		include "php/lang/".$_GET['lang']."/work_experience.php";
		include "php/lang/".$_GET['lang']."/education.php";
		include "php/lang/".$_GET['lang']."/references.php";
		include "php/lang/".$_GET['lang']."/contact.php";
		
	}else{
	
		include "php/lang/en/menu.php";
		include "php/lang/en/icons.php";
		include "php/lang/en/language.php";
		include "php/lang/en/titles.php";
		include "php/lang/en/basic.php";
		include "php/lang/en/work_experience.php";
		include "php/lang/en/education.php";
		include "php/lang/en/references.php";
		include "php/lang/en/contact.php";
	
	}
	
}else{
	
	include "php/lang/en/menu.php";
	include "php/lang/en/icons.php";
	include "php/lang/en/language.php";
	include "php/lang/en/titles.php";
	include "php/lang/en/basic.php";
	include "php/lang/en/work_experience.php";
	include "php/lang/en/education.php";
	include "php/lang/en/references.php";
	include "php/lang/en/contact.php";
	
}

include "php/config.php";
include "php/views/content.php";

?>
