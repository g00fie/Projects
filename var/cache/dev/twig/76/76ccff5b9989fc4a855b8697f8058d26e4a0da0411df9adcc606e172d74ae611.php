<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* starting-page.html.twig */
class __TwigTemplate_6aea642d188fd03e9085939d165ee3c61163f8301eec2fe54a2208f0a76702ca extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "starting-page.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <title>Nazwa</title>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link rel=\"stylesheet\" href=\"css/bootstrap4.css\">
    <link rel=\"stylesheet\" href=\"css/bootstrap3.css\">
    <link rel=\"stylesheet\" href=\"css/style.css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">
    <script src=\"https://unpkg.com/scrollreveal/dist/scrollreveal.min.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.2.1.js\"></script>
  </head>
  <body>
    <nav class=\"navbar navbar-default navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#intro\">Nazwa</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav navbar-left\">
            <li><a href=\"#about\" class=\"navText\">O nas</a></li>
            <li><a href=\"#presentation\" class=\"navText\">Działanie</a></li>
            <li><a href=\"#download\" class=\"navText\">Pobierz</a></li>
            <li><a href=\"#contact\" class=\"navText\">Kontakt</a></li>
            
          </ul>
          <ul class=\"nav navbar-nav navbar-right\">
            <li><a href=\"#\" class=\"navText\">Zaloguj</a></li>
            <li><a class=\"navText\" id=\"buttonreg\" href=\"#register\">Dołącz do nas</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <section id=\"intro\">
      <div class=\"container-fluid no-padding\">
        <div class=\"row\">
          <div class=\"col-md-12 col-sm-12\">
            <img src=\"img/calendarIntro.jpg\" alt=\"placeholder 960\" class=\"img-responsive\" />
          </div> 
        </div>
      </div>
    </section>

    <section id=\"about\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-6 col-sm-6\">
            <div class=\"info-left\">
              <img src=\"img/image1.jpg\" style=\"width: 100%;\">
            </div>
          </div>
          <div class=\"col-md-6 col-sm-6\">
            <div class=\"info-right\">
              <h2>Info Block One</h2>
              <p>Adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id=\"presentation\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-6 col-sm-6\">
            <div class=\"info-left\">
              <h2>Info Block One</h2>
              <p>Adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
            </div>
          </div>
          <div class=\"col-md-6 col-sm-6\">
            <div class=\"info-right\">
              <img src=\"img/image2.jpg\" style=\"width: 100%;\">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id=\"download\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-4 col-sm-4\" style=\"padding-top: 100px;\">
            <div class=\"info-left text-center\">
              <h2>Android</h2>
              <div class=\"hover\"><a href=\"#\"><img src=\"img/android.png\" class=\"image\"></a></div>
            </div>
          </div>
          <div class=\"col-md-4 col-sm-4\">
            <div class=\"info-middle\">
              <h2>Pobierz naszą aplikacje!</h2>
              <p>Opis pobierania</p>
            </div>
          </div>
          <div class=\"col-md-4 col-sm-4\" style=\"padding-top: 100px;\">
            <div class=\"info-right text-center\">
              <h2>Apple</h2>
              <div class=\"hover\"><a href=\"#\"><img src=\"img/ios.png\" class=\"image\"></a></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id=\"register\">
      <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 col-sm-6 slideLeft\">
              <div class=\"info-left\">
                <h2>Benefity z posiadania konta</h2>
                <p>Opis i wymienianie przykładów</p>
              </div>
            </div>
            <div class=\"col-md-6 col-sm-6 slideRight\">
              <div class=\"info-right\">
                <article class=\"card-body mx-auto\" style=\"max-width: 350px\">
                  <h4 class=\"card-title mt-3 text-center\" style=\"font-size: 30px\">Stwórz konto</h4>
                  <p>
                    <a href=\"\" class=\"btn btn-block btn-facebook\"><i class=\"fab fa-facebook-f\" style=\"margin-right: 10px\"></i>Zaloguj przez Facebook'a</a>
                    <a href=\"\" class=\"btn btn-block btn-google\"> <img src=\"img/googleico.svg\" style=\"width: 1.3rem; height: 1.3rem; margin-right: 10px; margin-bottom: 2px\">Zaloguj przez Google</a>
                    <a href=\"\" class=\"btn btn-block btn-twitter\"> <i class=\"fab fa-twitter\" style=\"margin-right: 10px\"></i>Zaloguj przez Twitter'a</a>
                  </p>
                  <p class=\"divider-text\" >
                        <span class=\"bg-light\" style=\"background-color: #f1f1f1 !important;\">LUB</span>
                  </p>
                  <form>
                  <div class=\"form-group input-group\">
                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\"> <i class=\"fa fa-user\"></i> </span>
                    </div>
                        <input name=\"\" class=\"form-control\" placeholder=\"Imię i nazwisko\" type=\"text\">
                    </div>
                    <div class=\"form-group input-group\">
                      <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\"> <i class=\"fa fa-envelope\"></i> </span>
                    </div>
                        <input name=\"\" class=\"form-control\" placeholder=\"Adres email\" type=\"email\">
                    </div>
                    <div class=\"form-group input-group\">
                      <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\"> <i class=\"fa fa-phone\"></i> </span>
                      </div>
                      <input name=\"\" class=\"form-control\" placeholder=\"Numer telefonu\" type=\"text\">
                    </div>
                    <div class=\"form-group input-group\">
                      <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\"> <i class=\"fas fa-birthday-cake\"></i> </span>
                      </div>
                        <input name=\"\" type=\"date\" class=\"form-control\">
                    </div>
                    <div class=\"form-group input-group\">
                      <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\"> <i class=\"fa fa-lock\"></i> </span>
                    </div>
                        <input class=\"form-control\" placeholder=\"Hasło\" type=\"password\">
                    </div>
                      <div class=\"form-group input-group\">
                      <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\"> <i class=\"fa fa-lock\"></i> </span>
                    </div>
                        <input class=\"form-control\" placeholder=\"Potwierdź hasło\" type=\"password\">
                    </div>        
                    <p class=\"text-center\" style=\"font-size: 12px;\">Klikając przycisk Zarejestruj, akceptujesz nasz <a href=\"\">Regulamin</a>. <a href=\"#\">Zasady dotyczące danych informują</a>, w jaki sposób gromadzimy, użytkujemy i udostępniamy dane użytkowników.</p>                            
                    <div class=\"form-group\">
                        <button type=\"submit\" class=\"btn btn-primary btn-block\"> Zarejestruj  </button>
                    </div>  
                      <p class=\"text-center\" style=\"margin-top: -10px;\">Posiadasz już konto? <a href=\"\">Zaloguj się</a> </p>                                                                 
                  </form>
                </article>
              </div>
            </div>
          </div>
      </div> 
    </section>

    <section id=\"contact\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-7 col-sm-7\">
            <div class=\"info-left\">
              <h2>Info Block One</h2>
              <p>Adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
            </div>
          </div>
          <div class=\"col-md-5 col-sm-5\">
            <div class=\"info-right\">
              <form>
                <div class=\"form-group\">
                  <label>Imię i nazwisko: </label>
                  <input class=\"form-control\" type=\"text\" name=\"\" value=\"\" placeholder=\"Imię i nazwisko\">
                </div>
                <div class=\"form-group\">
                  <label>Email: </label>
                  <input class=\"form-control\" type=\"text\" name=\"\" value=\"\" placeholder=\"Email\">
                </div>
                <div class=\"form-group\">
                  <label>Wiadomość: </label>
                  <textarea class=\"form-control\" name=\"\" value=\"\" placeholder=\"Wiadomość\"></textarea>
                </div>
                <button class=\"btn btn-primary btn-block\">Wyślij</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <p class=\"text-center\">© Marcin Nowak & Maciej Biliński 2019</p>
    </footer>
    <script>
        window.sr = ScrollReveal();
        sr.reveal('.navbar', {
          duration: 2000,
          origin:'bottom'
        });
        sr.reveal('#intro', {
          duration: 2000,
          origin:'top'
        });
        sr.reveal('.showcase-left', {
          duration: 2000,
          origin:'top',
          distance:'300px'
        });
        sr.reveal('.showcase-right', {
          duration: 2000,
          origin:'right',
          distance:'300px'
        });
        sr.reveal('.showcase-btn', {
          duration: 2000,
          origin:'bottom'
        });
        sr.reveal('#testimonial div', {
          duration: 2000,
          origin:'bottom'
        });
        sr.reveal('.info-middle',{
          duration: 2000,
          origin:'bottom',
          distance:'300px',
          viewFactor: 0.2
        });
        sr.reveal('.info-left', {
          duration: 2000,
          origin:'left',
          distance:'300px',
          viewFactor: 0.2
        });
        sr.reveal('.info-right', {
          duration: 2000,
          origin:'right',
          distance:'300px',
          viewFactor: 0.2
        });
    </script>

    <script>
    \$(function() {
      // Smooth Scrolling
      \$('a[href*=\"#\"]:not([href=\"#\"])').click(function() {
        if (location.pathname.replace(/^\\//,'') == this.pathname.replace(/^\\//,'') && location.hostname == this.hostname) {
          var target = \$(this.hash);
          target = target.length ? target : \$('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            \$('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });
    </script>
  </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "starting-page.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <title>Nazwa</title>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link rel=\"stylesheet\" href=\"css/bootstrap4.css\">
    <link rel=\"stylesheet\" href=\"css/bootstrap3.css\">
    <link rel=\"stylesheet\" href=\"css/style.css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">
    <script src=\"https://unpkg.com/scrollreveal/dist/scrollreveal.min.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.2.1.js\"></script>
  </head>
  <body>
    <nav class=\"navbar navbar-default navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#intro\">Nazwa</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav navbar-left\">
            <li><a href=\"#about\" class=\"navText\">O nas</a></li>
            <li><a href=\"#presentation\" class=\"navText\">Działanie</a></li>
            <li><a href=\"#download\" class=\"navText\">Pobierz</a></li>
            <li><a href=\"#contact\" class=\"navText\">Kontakt</a></li>
            
          </ul>
          <ul class=\"nav navbar-nav navbar-right\">
            <li><a href=\"#\" class=\"navText\">Zaloguj</a></li>
            <li><a class=\"navText\" id=\"buttonreg\" href=\"#register\">Dołącz do nas</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <section id=\"intro\">
      <div class=\"container-fluid no-padding\">
        <div class=\"row\">
          <div class=\"col-md-12 col-sm-12\">
            <img src=\"img/calendarIntro.jpg\" alt=\"placeholder 960\" class=\"img-responsive\" />
          </div> 
        </div>
      </div>
    </section>

    <section id=\"about\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-6 col-sm-6\">
            <div class=\"info-left\">
              <img src=\"img/image1.jpg\" style=\"width: 100%;\">
            </div>
          </div>
          <div class=\"col-md-6 col-sm-6\">
            <div class=\"info-right\">
              <h2>Info Block One</h2>
              <p>Adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id=\"presentation\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-6 col-sm-6\">
            <div class=\"info-left\">
              <h2>Info Block One</h2>
              <p>Adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
            </div>
          </div>
          <div class=\"col-md-6 col-sm-6\">
            <div class=\"info-right\">
              <img src=\"img/image2.jpg\" style=\"width: 100%;\">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id=\"download\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-4 col-sm-4\" style=\"padding-top: 100px;\">
            <div class=\"info-left text-center\">
              <h2>Android</h2>
              <div class=\"hover\"><a href=\"#\"><img src=\"img/android.png\" class=\"image\"></a></div>
            </div>
          </div>
          <div class=\"col-md-4 col-sm-4\">
            <div class=\"info-middle\">
              <h2>Pobierz naszą aplikacje!</h2>
              <p>Opis pobierania</p>
            </div>
          </div>
          <div class=\"col-md-4 col-sm-4\" style=\"padding-top: 100px;\">
            <div class=\"info-right text-center\">
              <h2>Apple</h2>
              <div class=\"hover\"><a href=\"#\"><img src=\"img/ios.png\" class=\"image\"></a></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id=\"register\">
      <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 col-sm-6 slideLeft\">
              <div class=\"info-left\">
                <h2>Benefity z posiadania konta</h2>
                <p>Opis i wymienianie przykładów</p>
              </div>
            </div>
            <div class=\"col-md-6 col-sm-6 slideRight\">
              <div class=\"info-right\">
                <article class=\"card-body mx-auto\" style=\"max-width: 350px\">
                  <h4 class=\"card-title mt-3 text-center\" style=\"font-size: 30px\">Stwórz konto</h4>
                  <p>
                    <a href=\"\" class=\"btn btn-block btn-facebook\"><i class=\"fab fa-facebook-f\" style=\"margin-right: 10px\"></i>Zaloguj przez Facebook'a</a>
                    <a href=\"\" class=\"btn btn-block btn-google\"> <img src=\"img/googleico.svg\" style=\"width: 1.3rem; height: 1.3rem; margin-right: 10px; margin-bottom: 2px\">Zaloguj przez Google</a>
                    <a href=\"\" class=\"btn btn-block btn-twitter\"> <i class=\"fab fa-twitter\" style=\"margin-right: 10px\"></i>Zaloguj przez Twitter'a</a>
                  </p>
                  <p class=\"divider-text\" >
                        <span class=\"bg-light\" style=\"background-color: #f1f1f1 !important;\">LUB</span>
                  </p>
                  <form>
                  <div class=\"form-group input-group\">
                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\"> <i class=\"fa fa-user\"></i> </span>
                    </div>
                        <input name=\"\" class=\"form-control\" placeholder=\"Imię i nazwisko\" type=\"text\">
                    </div>
                    <div class=\"form-group input-group\">
                      <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\"> <i class=\"fa fa-envelope\"></i> </span>
                    </div>
                        <input name=\"\" class=\"form-control\" placeholder=\"Adres email\" type=\"email\">
                    </div>
                    <div class=\"form-group input-group\">
                      <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\"> <i class=\"fa fa-phone\"></i> </span>
                      </div>
                      <input name=\"\" class=\"form-control\" placeholder=\"Numer telefonu\" type=\"text\">
                    </div>
                    <div class=\"form-group input-group\">
                      <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\"> <i class=\"fas fa-birthday-cake\"></i> </span>
                      </div>
                        <input name=\"\" type=\"date\" class=\"form-control\">
                    </div>
                    <div class=\"form-group input-group\">
                      <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\"> <i class=\"fa fa-lock\"></i> </span>
                    </div>
                        <input class=\"form-control\" placeholder=\"Hasło\" type=\"password\">
                    </div>
                      <div class=\"form-group input-group\">
                      <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\"> <i class=\"fa fa-lock\"></i> </span>
                    </div>
                        <input class=\"form-control\" placeholder=\"Potwierdź hasło\" type=\"password\">
                    </div>        
                    <p class=\"text-center\" style=\"font-size: 12px;\">Klikając przycisk Zarejestruj, akceptujesz nasz <a href=\"\">Regulamin</a>. <a href=\"#\">Zasady dotyczące danych informują</a>, w jaki sposób gromadzimy, użytkujemy i udostępniamy dane użytkowników.</p>                            
                    <div class=\"form-group\">
                        <button type=\"submit\" class=\"btn btn-primary btn-block\"> Zarejestruj  </button>
                    </div>  
                      <p class=\"text-center\" style=\"margin-top: -10px;\">Posiadasz już konto? <a href=\"\">Zaloguj się</a> </p>                                                                 
                  </form>
                </article>
              </div>
            </div>
          </div>
      </div> 
    </section>

    <section id=\"contact\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-7 col-sm-7\">
            <div class=\"info-left\">
              <h2>Info Block One</h2>
              <p>Adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
            </div>
          </div>
          <div class=\"col-md-5 col-sm-5\">
            <div class=\"info-right\">
              <form>
                <div class=\"form-group\">
                  <label>Imię i nazwisko: </label>
                  <input class=\"form-control\" type=\"text\" name=\"\" value=\"\" placeholder=\"Imię i nazwisko\">
                </div>
                <div class=\"form-group\">
                  <label>Email: </label>
                  <input class=\"form-control\" type=\"text\" name=\"\" value=\"\" placeholder=\"Email\">
                </div>
                <div class=\"form-group\">
                  <label>Wiadomość: </label>
                  <textarea class=\"form-control\" name=\"\" value=\"\" placeholder=\"Wiadomość\"></textarea>
                </div>
                <button class=\"btn btn-primary btn-block\">Wyślij</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <p class=\"text-center\">© Marcin Nowak & Maciej Biliński 2019</p>
    </footer>
    <script>
        window.sr = ScrollReveal();
        sr.reveal('.navbar', {
          duration: 2000,
          origin:'bottom'
        });
        sr.reveal('#intro', {
          duration: 2000,
          origin:'top'
        });
        sr.reveal('.showcase-left', {
          duration: 2000,
          origin:'top',
          distance:'300px'
        });
        sr.reveal('.showcase-right', {
          duration: 2000,
          origin:'right',
          distance:'300px'
        });
        sr.reveal('.showcase-btn', {
          duration: 2000,
          origin:'bottom'
        });
        sr.reveal('#testimonial div', {
          duration: 2000,
          origin:'bottom'
        });
        sr.reveal('.info-middle',{
          duration: 2000,
          origin:'bottom',
          distance:'300px',
          viewFactor: 0.2
        });
        sr.reveal('.info-left', {
          duration: 2000,
          origin:'left',
          distance:'300px',
          viewFactor: 0.2
        });
        sr.reveal('.info-right', {
          duration: 2000,
          origin:'right',
          distance:'300px',
          viewFactor: 0.2
        });
    </script>

    <script>
    \$(function() {
      // Smooth Scrolling
      \$('a[href*=\"#\"]:not([href=\"#\"])').click(function() {
        if (location.pathname.replace(/^\\//,'') == this.pathname.replace(/^\\//,'') && location.hostname == this.hostname) {
          var target = \$(this.hash);
          target = target.length ? target : \$('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            \$('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });
    </script>
  </body>
</html>
", "starting-page.html.twig", "B:\\PROGRAMOWANIE\\PROJEKTY\\Umowsie\\templates\\starting-page.html.twig");
    }
}
