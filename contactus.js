$(document).ready(function(){
    $(".send-btn").click(function(e){
        e.preventDefault();
        $.ajax({
            type : "POST",
            url : "php/contactus_success.php",
            data : {
                fullname : btoa($(".contact_name").val()),
                email : btoa($(".contact_email").val()),
                message : btoa($(".contact_message").val())
            },
            beforeSend : function(){
                $(".send-btn").html("Please Wait...");
            },
            success : function(response){    
                $(".send-btn").html("send");
                $(".contact_form").trigger("reset");
                alert(response);
            }
        });
    });
});
