$(function(){
   
        $("#signup_form").validate({
            rules:{
                email:{
                    required:true,
                    email:true
                },
                password1:"required",
                password2:{
                    required:true,
                    equalTo:"#password1"
                }
            },
            // custom message
            messages:{
                email:{
                    required:"<br ><b style='color:red;font-family:ebrima'>Enter an email<b></br>",
                    email:"<br ><b style='color:red;font-family:ebrima'>Enter a valid email<b></br>"
                },
                password1:{
                    required:"<br ><b style='color:red;font-family:ebrima'>Enter password<b></br>",
                },
                password2:{
                    required:"<br ><b style='color:red;font-family:ebrima'>Confirm password<b></br>",
                    password2:"Two password do not match"
                }
                
            }
         
           
        })
    
})
$(document).ready(function(){
    $("#f-password").click(function(){
        $(".alert").show();
    })
})