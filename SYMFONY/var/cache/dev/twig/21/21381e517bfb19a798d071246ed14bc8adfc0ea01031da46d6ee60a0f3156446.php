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

/* layouts/form_register_layout.html.twig */
class __TwigTemplate_cb85cae65e2593e1e0b096b8d648a5d7013041efbdab764d24c52b6e0a87f276 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'form_start' => [$this, 'block_form_start'],
            'form_widget_compound' => [$this, 'block_form_widget_compound'],
            'attributes' => [$this, 'block_attributes'],
            'widget_attributes' => [$this, 'block_widget_attributes'],
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'button_widget' => [$this, 'block_button_widget'],
            'form_row' => [$this, 'block_form_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/form_register_layout.html.twig"));

        // line 1
        $this->displayBlock('form_start', $context, $blocks);
        // line 10
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 14
        $this->displayBlock('attributes', $context, $blocks);
        // line 27
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 33
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 37
        $this->displayBlock('button_widget', $context, $blocks);
        // line 58
        $this->displayBlock('form_row', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_form_start($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_start"));

        // line 2
        echo "<form id=\"registerForm\">
        <div class=\"form-group text-danger errors\" style=\"display:none;\">
            <strong>";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ERROR", [], "messages");
        echo "!</strong>
            <span id=\"internalError\">";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("INTERNAL_ERROR", [], "messages");
        echo "</span>
            <span id=\"noConnectionError\">";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("NO_CONNECTION_ERROR", [], "messages");
        echo "!</span>
        </div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_form_widget_compound($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 11
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_attributes($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attributes"));

        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 16
            echo " ";
            // line 17
            if (twig_in_filter($context["attrname"], [0 => "placeholder", 1 => "title"])) {
                // line 18
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["attrvalue"]), "html", null, true);
                echo "\"";
            } elseif ((            // line 19
$context["attrvalue"] === true)) {
                // line 20
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 21
$context["attrvalue"] === false)) {
                // line 22
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_widget_attributes($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 28
        echo "name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "\"";
        // line 29
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 29, $this->source); })())) {
            echo " required=\"required\"";
        }
        // line 30
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 33
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 34
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 34, $this->source); })()), "text")) : ("text")), "html", null, true);
        echo "\" class=\"form-control\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " />";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 37
    public function block_button_widget($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_widget"));

        // line 38
        echo "<p class=\"text-center\" style=\"font-size: 12px;\">
        ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("REGISTER_FORM_ACCEPT_RULES_INFO_PART_1", [], "messages");
        // line 40
        echo "        <a href=\"#\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("REGISTER_FORM_ANNOTATION_1", [], "messages");
        echo "</a>.
        <a href=\"#\">";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("REGISTER_FORM_ANNOTATION_2", [], "messages");
        echo "</a>
        ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("REGISTER_FORM_ACCEPT_RULES_INFO_PART_2", [], "messages");
        // line 43
        echo "    </p>
    <div class=\"form-group\">
        <button type=\"";
        // line 45
        echo twig_escape_filter($this->env, (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 45, $this->source); })()), "button")) : ("button")), "html", null, true);
        echo "\" class=\"btn btn-primary btn-block\" ";
        $this->displayBlock("attributes", $context, $blocks);
        echo ">
            <span class=\"text\">";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 46, $this->source); })())), "html", null, true);
        echo "</span>
            <span class=\"loading\" style=\"display:none;\">
                <span class=\"spinner-border\" role=\"status\" aria-hidden=\"true\" style=\"margin-right: 3px; border-width: .2em\"></span> ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("LOADING", [], "messages");
        echo "...
            </span>
        </button>
    </div>
    <p class=\"text-center\" style=\"margin-top: -10px;\">
        ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("REGISTER_FORM_ACCOUNT_QUESTION", [], "messages");
        echo " <a href=\"\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SIGN_IN", [], "messages");
        echo "</a>
    </p>
    <div class=\"g-recaptcha\" data-sitekey=\"6LeZ9p8UAAAAAHcdbffht-BKLHu1rTd94BuxmM9C\" data-size=\"invisible\" style=\"display:none;\" data-callback=\"onRegisterSubmit\"></div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 58
    public function block_form_row($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        // line 59
        echo "    <div class=\"form-group input-group\">
        ";
        // line 60
        if (twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "icon_class", [], "any", true, true)) {
            // line 61
            echo "        <div class=\"input-group-prepend\">
            <span class=\"input-group-text\">
                <i class=\"fa ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 63, $this->source); })()), "icon_class", []), "html", null, true);
            echo "\"></i>
            </span>
        </div>
        ";
        }
        // line 67
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), 'widget');
        echo "
        ";
        // line 68
        if (twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "error", [], "any", true, true)) {
            // line 69
            echo "        <small id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 69, $this->source); })()), "error", []), "id", []), "html", null, true);
            echo "\" class=\"form-text text-danger\" style=\"display:none;\">
            <strong>";
            // line 70
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ERROR", [], "messages");
            echo "!</strong> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 70, $this->source); })()), "error", []), "msg", [])), "html", null, true);
            echo "
        </small>
        ";
        }
        // line 73
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "layouts/form_register_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  284 => 73,  276 => 70,  271 => 69,  269 => 68,  264 => 67,  257 => 63,  253 => 61,  251 => 60,  248 => 59,  242 => 58,  230 => 53,  222 => 48,  217 => 46,  211 => 45,  207 => 43,  205 => 42,  201 => 41,  196 => 40,  194 => 39,  191 => 38,  185 => 37,  174 => 34,  168 => 33,  161 => 30,  157 => 29,  153 => 28,  147 => 27,  132 => 22,  130 => 21,  125 => 20,  123 => 19,  118 => 18,  116 => 17,  114 => 16,  110 => 15,  104 => 14,  97 => 11,  91 => 10,  82 => 6,  78 => 5,  74 => 4,  70 => 2,  64 => 1,  57 => 58,  55 => 37,  53 => 33,  51 => 27,  49 => 14,  47 => 10,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- block form_start -%}
    <form id=\"registerForm\">
        <div class=\"form-group text-danger errors\" style=\"display:none;\">
            <strong>{% trans %}ERROR{% endtrans %}!</strong>
            <span id=\"internalError\">{% trans %}INTERNAL_ERROR{% endtrans %}</span>
            <span id=\"noConnectionError\">{% trans %}NO_CONNECTION_ERROR{% endtrans %}!</span>
        </div>
{%- endblock form_start -%}

{%- block form_widget_compound -%}
    {{- block('form_rows') -}}
{%- endblock form_widget_compound -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ attrvalue|trans }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}

{%- block widget_attributes -%}
    name=\"{{ name }}\"
    {%- if required %} required=\"required\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_attributes -%}

{%- block form_widget_simple -%}
    <input type=\"{{ type|default('text') }}\" class=\"form-control\" {{ block('widget_attributes') }} />
{%- endblock form_widget_simple -%}

{%- block button_widget -%}
    <p class=\"text-center\" style=\"font-size: 12px;\">
        {% trans %}REGISTER_FORM_ACCEPT_RULES_INFO_PART_1{% endtrans %}
        <a href=\"#\">{% trans %}REGISTER_FORM_ANNOTATION_1{% endtrans %}</a>.
        <a href=\"#\">{% trans %}REGISTER_FORM_ANNOTATION_2{% endtrans %}</a>
        {% trans %}REGISTER_FORM_ACCEPT_RULES_INFO_PART_2{% endtrans %}
    </p>
    <div class=\"form-group\">
        <button type=\"{{ type|default('button') }}\" class=\"btn btn-primary btn-block\" {{ block('attributes') }}>
            <span class=\"text\">{{ name|trans }}</span>
            <span class=\"loading\" style=\"display:none;\">
                <span class=\"spinner-border\" role=\"status\" aria-hidden=\"true\" style=\"margin-right: 3px; border-width: .2em\"></span> {% trans %}LOADING{% endtrans %}...
            </span>
        </button>
    </div>
    <p class=\"text-center\" style=\"margin-top: -10px;\">
        {% trans %}REGISTER_FORM_ACCOUNT_QUESTION{% endtrans %} <a href=\"\">{% trans %}SIGN_IN{% endtrans %}</a>
    </p>
    <div class=\"g-recaptcha\" data-sitekey=\"6LeZ9p8UAAAAAHcdbffht-BKLHu1rTd94BuxmM9C\" data-size=\"invisible\" style=\"display:none;\" data-callback=\"onRegisterSubmit\"></div>
{%- endblock button_widget -%}

{% block form_row %}
    <div class=\"form-group input-group\">
        {% if label_attr.icon_class is defined %}
        <div class=\"input-group-prepend\">
            <span class=\"input-group-text\">
                <i class=\"fa {{ label_attr.icon_class }}\"></i>
            </span>
        </div>
        {% endif %}
        {{ form_widget(form) }}
        {% if label_attr.error is defined %}
        <small id=\"{{ label_attr.error.id }}\" class=\"form-text text-danger\" style=\"display:none;\">
            <strong>{% trans %}ERROR{% endtrans %}!</strong> {{ label_attr.error.msg|trans }}
        </small>
        {% endif %}
    </div>
{% endblock %}
", "layouts/form_register_layout.html.twig", "B:\\PROGRAMOWANIE\\PROJEKTY\\umowsie\\templates\\layouts\\form_register_layout.html.twig");
    }
}
