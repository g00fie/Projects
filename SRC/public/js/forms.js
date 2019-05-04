class Form{
    preSubmit(){
        this.form.querySelectorAll("div.errors:not(.d-none), .internalError:not(.d-none), .noConnectionError:not(.d-none)").forEach(function(item){
            item.classList.add("d-none");
        });

        let button = document.getElementById(this.name+"Submit");
        button.setAttribute("disabled", "disabled");
        button.querySelector("span.text:not(.d-none)").classList.add("d-none");
        button.querySelector("span.loading.d-none").classList.remove("d-none");

        grecaptcha.execute(this.recaptcha);
    }

    submit(token){
        var self = this;
        var data = {
            "recaptcha": token
        };

        this.fields.forEach(function(item){
            data[item] = self.form.querySelector(`*[name='${item}']`).value;
        });
        this.optionalFields.forEach(function(item){
            var value = self.form.querySelector(`*[name='${item}']`).value;
            if(value.length>0)
                data[item] = value;
        });
        $.ajax({
            method: "POST",
            data: data,
            url: "/API/"+self.name,
            error: function(XMLHttpRequest){
                if (XMLHttpRequest.readyState === 0){
                    self.form.querySelector(".noConnectionError.d-none").classList.remove("d-none");
                }else{
                    self.form.querySelector(".internalError.d-none").classList.remove("d-none");
                }
                self.form.querySelector("div.errors.d-none").classList.remove("d-none");
            },
            success: function(data){
                if(data.success){
                    self.form.querySelectorAll("input, select, textarea").forEach(function(item){
                        item.value = "";
                    });
                    self.success();
                }else{
                    self.form.querySelector(".internalError.d-none").classList.remove("d-none");
                    self.form.querySelector("div.errors.d-none").classList.remove("d-none");
                }
            },
            complete: function(){
                let button = document.getElementById(self.name+"Submit");
                button.removeAttribute("disabled");
                button.querySelector("span.loading:not(.d-none)").classList.add("d-none");
                button.querySelector("span.text.d-none").classList.remove("d-none");
                grecaptcha.reset(self.recaptcha);
            }
        });
    }

    constructor(name, success, fields=[], optionalFields=[]){
        if(undefined === name)
            throw new Exception("You have to define name of form!");
        this.name = name;

        if(!Array.isArray(fields) || !Array.isArray(optionalFields))
            throw new Exception("Fields and optionalFields have to be Array!");

        if(!(success instanceof Function))
            throw new Exception("Success has to be a Function!");
        this.success = success;

        this.fields = fields;
        this.optionalFields = optionalFields;

        var self = this;

        this.form = document.getElementById(this.name+"Form");
        this.form.addEventListener("submit", function(e){
            e.preventDefault();
            self.preSubmit();
        });

        this.recaptcha = grecaptcha.render(
            document.getElementById(this.name+"Recaptcha"),
            {
                sitekey: "6LeZ9p8UAAAAAHcdbffht-BKLHu1rTd94BuxmM9C",
                size: "invisible",
                callback: function(token){
                    self.submit(token);
                }
            }
        );
    }
};


function onLoad(){
    const contactForm = new Form(
        "contact",
        function(){
            alert("WYSŁANO!");
        },
        [
            "message"
        ],
        [
            "name",
            "email"
        ]
    );
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
