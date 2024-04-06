$(document).ready(function(){
    $(".signin-btn").click(function(e){
        e.preventDefault();
        $.ajax({
            type : "POST",
            url : "php/signin_success.php",
            data : {
                username : btoa($(".signin_user").val()),
                email : btoa($(".signin_email").val()),
                password : btoa($(".signin_pass").val())
            },
            beforeSend : function(){
                $(".signin-btn").html("Please Wait...");
            },
            success : function(response){    
                $(".signin-btn").html("Sign in");
                $(".signin_form").trigger("reset");
                alert(response);
            }
        });
    });
});
