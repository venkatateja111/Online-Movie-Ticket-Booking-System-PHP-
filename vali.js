
function abc(){
           var a=document.forms[0];
            var letters = /^[A-Za-z\s]+$/;
      if(!(a.first_name.value.match(letters))){
             if($("#myAlert").find("div#myAlert2").length==0){
    $("#myAlert").append("<div class='alert alert-warning alert-dismissable' id='myAlert2'> <button type='button' class='close' data-dismiss='alert'  aria-hidden='true'>&times;</button> \n\
      please enter only letters in first name</div>");
  }
                $("#myAlert").css("display", "");
                return false;
      }
           
           if(!(a.last_name.value.match(letters))){
             if($("#myAlert5").find("div#myAlert6").length==0){
    $("#myAlert5").append("<div class='alert alert-warning alert-dismissable' id='myAlert6'> <button type='button' class='close' data-dismiss='alert'  aria-hidden='true'>&times;</button> \n\
      please enter only letters in last name</div>");
  }
                $("#myAlert5").css("display", "");
                return false;
      }
           
           if(a.email_id.value.indexOf("@",0)<0){
    			if($("#myAlert9").find("div#myAlert10").length==0){
    $("#myAlert9").append("<div class='alert alert-warning alert-dismissable' id='myAlert10'> <button type='button' class='close' data-dismiss='alert'  aria-hidden='true'>&times;</button> \n\
      please include @ in your email</div>");
  }
        $("#myAlert9").css("display", "");
    			return false;
    		}
    		if(a.email_id.value.indexOf(".",0)<0){
    			if($("#myAlert11").find("div#myAlert12").length==0){
    $("#myAlert11").append("<div class='alert alert-warning alert-dismissable' id='myAlert12'> <button type='button' class='close' data-dismiss='alert'  aria-hidden='true'>&times;</button> \n\
      please include . in your email</div>");
  }
        $("#myAlert11").css("display", "");
    			return false;
    		}
                if(a.password.value==""){
    			if($("#myAlert15").find("div#myAlert16").length==0){
    $("#myAlert15").append("<div class='alert alert-warning alert-dismissable' id='myAlert16'> <button type='button' class='close' data-dismiss='alert'  aria-hidden='true'>&times;</button> \n\
      please enter password</div>");
  }
        $("#myAlert15").css("display", "");
    			return false;
    		}
                 if(a.phone.value.length != 10){
           	if($("#myAlert13").find("div#myAlert14").length==0){
    $("#myAlert13").append("<div class='alert alert-warning alert-dismissable' id='myAlert14'> <button type='button' class='close' data-dismiss='alert'  aria-hidden='true'>&times;</button> \n\
      please enter 10 digit phone number</div>");
  }
        $("#myAlert13").css("display", "");
           	return false;
           }
    		else{
    			
                        header('location: signup_script.php');
    		}
            }
           