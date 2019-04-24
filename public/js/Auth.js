$(document).ready(function(){
    $("#registerForm").submit(function(){
        _this = $(this);
        $.ajax({
            method: "POST",
            data: _this.serialize(),
            url: "/API/register",
            accepts: {
                json: "application/json"
            },
            beforeSend: function(){

            },
            contentType: "application/json",
            dataType: "json",
            error: function(){

            },
            success: function(data){
                console.log(data);
            }
        });
        return false;
    });
});
