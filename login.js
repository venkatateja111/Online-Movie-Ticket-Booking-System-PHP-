function abc(){
   
    $("#myAlert").css("display", "none");
    var a=document.forms[0];
    if((a.email_id.value=="")||(a.email_id.value.indexOf("@",0)<0)|| (a.email_id.value.indexOf(".",0)<0)){
        if($("#myAlert").find("div#myAlert2").length==0){
    $("#myAlert").append("<div class='alert alert-warning alert-dismissable' id='myAlert2'> <button type='button' class='close' data-dismiss='alert'  aria-hidden='true'>&times;</button> \n\
      please enter correct email id</div>");
  }
        $("#myAlert").css("display", "");
        return false;}
    
    if(a.password.value==""){
        if($("#myAlert3").find("div#myAlert4").length==0){
    $("#myAlert3").append("<div class='alert alert-warning alert-dismissable' id='myAlert4'> <button type='button' class='close' data-dismiss='alert'  aria-hidden='true'>&times;</button> \n\
      please enter correct password</div>");
  }
        $("#myAlert3").css("display", "");
        return false;}
    
    
    
    else{
    header('location: login_script.php');
   
    }
}