<?php

if(isset($_GET['lang'])){
	
	if($_GET['lang'] == "en" || $_GET['lang'] == "es"){
		
		include "php/contents/".$_GET['lang']."/menu.php";
		include "php/contents/".$_GET['lang']."/icons.php";
		include "php/contents/".$_GET['lang']."/language.php";
		include "php/contents/".$_GET['lang']."/titles.php";
		include "php/contents/".$_GET['lang']."/basic.php";
		include "php/contents/".$_GET['lang']."/work_experience.php";
		include "php/contents/".$_GET['lang']."/education.php";
		include "php/contents/".$_GET['lang']."/references.php";
		include "php/contents/".$_GET['lang']."/contact.php";
		
	}else{
	
		include "php/contents/en/menu.php";
		include "php/contents/en/icons.php";
		include "php/contents/en/language.php";
		include "php/contents/en/titles.php";
		include "php/contents/en/basic.php";
		include "php/contents/en/work_experience.php";
		include "php/contents/en/education.php";
		include "php/contents/en/references.php";
		include "php/contents/en/contact.php";
	
	}
	
}else{
	
	include "php/contents/en/menu.php";
	include "php/contents/en/icons.php";
	include "php/contents/en/language.php";
	include "php/contents/en/titles.php";
	include "php/contents/en/basic.php";
	include "php/contents/en/work_experience.php";
	include "php/contents/en/education.php";
	include "php/contents/en/references.php";
	include "php/contents/en/contact.php";
	
}

include "php/config.php";
include "content.php";

?>
