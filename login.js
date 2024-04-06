$(document).ready(function(){
    $(".login_here").click(function(e){
        e.preventDefault();
        $.ajax({
            type : "POST",
            url : "php/login_success.php",
            data : {
                email : btoa($(".login_email").val()),
                password : btoa($(".login_password").val()),
            },
            beforeSend : function(){
                $(".login_here").html("Please wait...");
            },
            success : function(response){
                if(response.trim() == "Login Success"){
                    window.location = "profile/profile.php";
                }
            }
        });
    });
});