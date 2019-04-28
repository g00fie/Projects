const jsdom = require("jsdom");
const { JSDOM } = jsdom;

var fs = require('fs');

fs.readFile('../SYMFONY/public/starting-page.html', 'utf8', function(err, contents) {
    const dom = new JSDOM(contents);
    const document = dom.window.document;
    
    //zmiana ścieżki na bezwzględną
    document.querySelectorAll("*[href^='css']").forEach(function(item){
        item.setAttribute("href", "/" + item.getAttribute("href"));
    });
    document.querySelectorAll("*[src^='js'], *[src^='img']").forEach(function(item){
        item.setAttribute("src", "/" + item.getAttribute("src"));
    });
    
    //zmiana formularza rejestracji na twigową wersję
    {
        var form = document.getElementById("registerForm");
        var parent = form.parentElement;
        parent.removeChild(form);
        parent.innerHTML += `
            {% form_theme register 'layouts/form_register_layout.html.twig' %}
            {{ form(register) }}
        `;
    }
    
    fs.writeFile("../SYMFONY/templates/starting-page.html.twig", dom.serialize(), function(err){
        console.log("done");
    });
});