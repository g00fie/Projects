$(document).ready(function(){
    $("#registerForm").submit(function(){
        $("#incorrectPassword, #registerForm div.errors, #internalError, #noConnectionError").hide();

        if($(this).find("input[name='password']").val() !== $(this).find("input[name='repeatedPassword']").val())
            $("#incorrectPassword").show();
        else{
            $("#submitRegister").attr("disabled", "disabled");
            $("#submitRegister span.text").hide();
            $("#submitRegister span.loading").show();

            grecaptcha.execute();

        }
        return false;
    });
});

function onRegisterSubmit(token){
    var form = $("#registerForm");
    var dateBirth = form.find("input[name='dateBirth']").val();
    var phoneNumber = form.find("input[name='phoneNumber']").val();
    var data = {
        "name": form.find("input[name='name']").val(),
        "email": form.find("input[name='email']").val(),
        "password": form.find("input[name='password']").val(),
        "recaptcha": token
    };
    if(dateBirth.length>0)
        data["dateBirth"] = dateBirth;
    if(phoneNumber.length>0)
        data["phoneNumber"] = phoneNumber;
    $.ajax({
        method: "POST",
        data: data,
        url: "/API/register",
        error: function(XMLHttpRequest){
            if (XMLHttpRequest.readyState === 0){
                $("#noConnectionError").show();
            }else{
                $("#internalError").show();
            }
            $("#registerForm div.errors").show();
        },
        success: function(data){
            if(data.success)
                alert("ZAREJESTROWANO!");
            else{
                if(data["used_email"] === true)
                    $("#usedEmail").show();
                else
                    $("#internalError, #registerForm div.errors").show();
            }
        },
        complete: function(){
            $("#submitRegister").removeAttr("disabled");
            $("#submitRegister span.loading").hide();
            $("#submitRegister span.text").show();
            grecaptcha.reset();
        }
    });
}
