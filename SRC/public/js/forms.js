var contactRecaptcha;

function onLoad(){
    contactRecaptcha = grecaptcha.render(document.getElementById("contactRecaptcha"), {
        sitekey: "6LeZ9p8UAAAAAHcdbffht-BKLHu1rTd94BuxmM9C",
        size: "invisible",
        callback: onContactSubmit
    });
}

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

    $("#contactForm").submit(function(){
        $(this).find("div.errors, .internalError, .noConnectionError").hide();
        $("#submitContact").attr("disabled", "disabled");
        $("#submitContact span.text").hide();
        $("#submitContact span.loading").show();

        grecaptcha.execute(contactRecaptcha);
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

function onContactSubmit(token){
    var form = $("#contactForm");
    var name = form.find("input[name='name']").val();
    var email = form.find("input[name='email']").val();
    var data = {
        "message": form.find("textarea[name='message']").val(),
        "recaptcha": token
    };
    if(name.length>0)
        data["name"] = name;
    if(email.length>0)
        data["email"] = email;
    $.ajax({
        method: "POST",
        data: data,
        url: "/API/contact",
        error: function(XMLHttpRequest){
            if (XMLHttpRequest.readyState === 0){
                form.find(".noConnectionError").show();
            }else{
                form.find(".internalError").show();
            }
            form.find("div.errors").show();
        },
        success: function(data){
            if(data.success){
                alert("WYSŁANO!");
                form.find("input, textarea").val("");
            }else{
                console.log("test");
                form.find(".internalError, div.errors").show();
            }
        },
        complete: function(){
            $("#submitContact").removeAttr("disabled");
            $("#submitContact span.loading").hide();
            $("#submitContact span.text").show();
            grecaptcha.reset(contactRecaptcha);
        }
    });
}
