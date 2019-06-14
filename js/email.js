
var $j = jQuery.noConflict();

var http = createRequestObject();
var areal = Math.random() + "";
var real = areal.substring(2,6);

function createRequestObject() {
	var xmlhttp;
	try {
	var xmlhttp = null;if (window.XMLHttpRequest) { xmlhttp = new XMLHttpRequest();}else{  if (window.ActiveXObject) {     xmlhttp = new ActiveXObject('Msxml2.XMLHTTP');  } }

// xmlhttp=new ActiveXObject("Msxml2.XMLHTTP"); 
	}
  catch(e) {
    try { 
    var xmlhttp = null;if (window.XMLHttpRequest) { xmlhttp = new XMLHttpRequest();}else{  if (window.ActiveXObject) {     xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');  } }
    	//xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    catch(f) { xmlhttp=null; }
  }
  if(!xmlhttp&&typeof XMLHttpRequest!="undefined") {
  	xmlhttp=new XMLHttpRequest();
  }
	return  xmlhttp;
}


function sendRequest() {
	
	var rnd = Math.random();
	var name = document.getElementById("name").value;
	var email = escape(document.getElementById("email").value);
	var subject = escape(document.getElementById("subject").value);
	var message = document.getElementById("message").value;

	try{
    http.open('POST',  'php/contactform.php');
    http.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    http.onreadystatechange = handleResponse;
		http.send('name='+name+'&email='+email+'&subject='+subject+'&message='+message+'&rnd='+rnd);
	}
	catch(e){}
	finally{
	jQuery('#contactform').slideUp("slow").hide();
	jQuery('#contactWrapper').append('<div class="success"><h4>Email Successfully Sent!</h4><br><p>Thank you for using our contact form <strong>'+name+'</strong>! Your email was successfully sent and we&#39;ll be in touch with you soon.</p></div>');
	}
}

function validate_email(address) {
   var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
   if(reg.test(address) == false) {
      return false;
   }
   else
   return true;
}

function validate_phone(phone){
	 var reg = /^[\:\-\.\_\(\) 0-9]+$/
        	if(reg.test(phone) == false) {
      return false;
   }
   else
   return true;
}

function check_values() {
	//Form
	var valid = '';

	
	var $j = jQuery.noConflict();
	
	var name = '';
	var email = '';
	var subject = '';
	var message = '';
	
	if(typeof $j('#contactform #name').val() != "undefined" )
	{
	 name = document.getElementById("name").value;
	}
	if(typeof $j('#contactform #email').val() != "undefined" )
	{
	 email = document.getElementById("email").value;
	}
	if(typeof $j('#contactform #subject').val() != "undefined" )
	{
	 subject = document.getElementById("subject").value;
	}
	if(typeof $j('#contactform #message').val() != "undefined" )
	{
	 message = document.getElementById("message").value;
	}

	
	var errors=0;
     if($j('#contactform #name').val()!=undefined)
	 if($j('#contactform #name').val()=='') {
	 	var hasClass=$j('#contactform #name').parent().parent().find(".error").hasClass("error");
	 	if(!hasClass)
	 	    $j('#contactform #name').parent().parent().append('<label for="name" generated="true" class="error">Please enter your name</label>');
			$j('#contactform #name').focus();
			//return false;
			errors++;
		}
		else
		$j('#contactform #name').parent().parent().find(".error").remove();
		
		if($j('#contactform #email').val()!=undefined)
		if(validate_email($j('#contactform #email').val())==false ) {
		var hasClass=$j('#contactform #email').parent().parent().find(".error").hasClass("error");
	 	if(!hasClass)
	 	    $j('#contactform #email').parent().parent().append('<label for="email" generated="true" class="error">Please enter a valid email address</label>');	
			$j('#contactform #email').focus();
			//return false;
			errors++;
		}
		else
		$j('#contactform #email').parent().parent().find(".error").remove();
		
		
		if($j('#contactform #subject').val()!=undefined)
		if($j('#contactform #subject').val()==''){
		var hasClass=$j('#contactform #subject').parent().parent().find(".error").hasClass("error");
	 	if(!hasClass)
	 	    $j('#contactform #subject').parent().parent().append('<label for="subject" generated="true" class="error">You need to enter a subject!</label>');	
			$j('#contactform #subject').focus();
			//return false;
			errors++;
		}
		else
		$j('#contactform #subject').parent().parent().find(".error").remove();
		
		if($j('#contactform #message').val()!=undefined)
		if($j('#contactform #message').val()==''){
		var hasClass=$j('#contactform #message').parent().parent().find(".error").hasClass("error");
	 	if(!hasClass)
	 	    $j('#contactform #message').parent().parent().append('<label for="message" generated="true" class="error">You need to enter a message!</label>');	
			$j('#contactform #message').focus();
			//return false;
			errors++;
		}
		else
		$j('#contactform #message').parent().parent().find(".error").remove();
		
	

	if(errors==0) {
			document.getElementById("submit").disabled=true;
			document.getElementById("submit").value='Please Wait..';
			sendRequest();
	}
}

function handleResponse() {
	try{
		if((http.readyState == 4)&&(http.status == 200)){
			var response = http.responseText;
			document.getElementById("confirmation").innerHTML = response;
			document.getElementById("confirmation").style.display ="";
		}
	}
	catch(e){}
	finally{}
}

function isUndefined(a) {
   return typeof a == 'undefined';
}

function trim(a) {
	return a.replace(/^s*(S*(s+S+)*)s*$/, "$1");
}

function isEmail(a) {
   return (a.indexOf(".") > 0) && (a.indexOf("@") > 0);
}
