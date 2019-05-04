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

    constructor(name, success, fields=[], optionalFields=[], validateFunc=undefined){
        if(undefined === name)
            throw new Exception("You have to define name of form!");
        this.name = name;

        if(!Array.isArray(fields) || !Array.isArray(optionalFields))
            throw new Exception("Fields, optionalFields and repeatedFields have to be Array!");

        if(!(success instanceof Function))
            throw new Exception("Success has to be a Function!");
        this.success = success;

        var self = this;

        this.fields = fields;
        this.optionalFields = optionalFields;

        this.form = document.getElementById(this.name+"Form");
        this.form.addEventListener("submit", function(e){
            e.preventDefault();
            if(undefined !== validateFunc && !validateFunc)
                return;
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
    const registerForm = new Form(
        "register",
        function(){
            alert("ZAREJESTROWANO!");
        },
        [
            "name",
            "email",
            "password"
        ],
        [
            "phoneNumber",
            "dateBirth"
        ],
        function(){
            let form = document.getElementById("registerForm");
            let password = form.querySelector("input[name='password']");
            let confirm = form.querySelector("input[name='repeated-password']");

            if(password != confirm)
                confirm.parentNode.querySelector("div.invalid-feedback")
        }
    );

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
