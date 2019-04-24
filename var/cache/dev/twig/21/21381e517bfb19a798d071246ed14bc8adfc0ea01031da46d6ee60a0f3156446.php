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
        // line 5
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 9
        $this->displayBlock('attributes', $context, $blocks);
        // line 22
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 28
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 32
        $this->displayBlock('button_widget', $context, $blocks);
        // line 47
        $this->displayBlock('form_row', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_form_start($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_start"));

        // line 2
        echo "<form id=\"registerForm\">";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_form_widget_compound($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 6
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_attributes($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attributes"));

        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 11
            echo " ";
            // line 12
            if (twig_in_filter($context["attrname"], [0 => "placeholder", 1 => "title"])) {
                // line 13
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["attrvalue"]), "html", null, true);
                echo "\"";
            } elseif ((            // line 14
$context["attrvalue"] === true)) {
                // line 15
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 16
$context["attrvalue"] === false)) {
                // line 17
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

    // line 22
    public function block_widget_attributes($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 23
        echo "name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "\"";
        // line 24
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 24, $this->source); })())) {
            echo " required=\"required\"";
        }
        // line 25
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 29
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 29, $this->source); })()), "text")) : ("text")), "html", null, true);
        echo "\" class=\"form-control\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " />";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 32
    public function block_button_widget($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_widget"));

        // line 33
        echo "<p class=\"text-center\" style=\"font-size: 12px;\">
        ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("REGISTER_FORM_ACCEPT_RULES_INFO_PART_1", [], "messages");
        // line 35
        echo "        <a href=\"#\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("REGISTER_FORM_ANNOTATION_1", [], "messages");
        echo "</a>.
        <a href=\"#\">";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("REGISTER_FORM_ANNOTATION_2", [], "messages");
        echo "</a>
        ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("REGISTER_FORM_ACCEPT_RULES_INFO_PART_2", [], "messages");
        // line 38
        echo "    </p>
    <div class=\"form-group\">
        <button type=\"";
        // line 40
        echo twig_escape_filter($this->env, (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 40, $this->source); })()), "button")) : ("button")), "html", null, true);
        echo "\" class=\"btn btn-primary btn-block\" ";
        $this->displayBlock("attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 40, $this->source); })())), "html", null, true);
        echo "</button>
    </div>
    <p class=\"text-center\" style=\"margin-top: -10px;\">
        ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("REGISTER_FORM_ACCOUNT_QUESTION", [], "messages");
        echo " <a href=\"\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SIGN_UP", [], "messages");
        echo "</a>
    </p>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 47
    public function block_form_row($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        // line 48
        echo "    <div class=\"form-group input-group\">
        ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "icon_class", [], "any", true, true)) {
            // line 50
            echo "        <div class=\"input-group-prepend\">
            <span class=\"input-group-text\">
                <i class=\"fa ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 52, $this->source); })()), "icon_class", []), "html", null, true);
            echo "\"></i>
            </span>
        </div>
        ";
        }
        // line 56
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), 'widget');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "layouts/form_register_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  240 => 56,  233 => 52,  229 => 50,  227 => 49,  224 => 48,  218 => 47,  207 => 43,  197 => 40,  193 => 38,  191 => 37,  187 => 36,  182 => 35,  180 => 34,  177 => 33,  171 => 32,  160 => 29,  154 => 28,  147 => 25,  143 => 24,  139 => 23,  133 => 22,  118 => 17,  116 => 16,  111 => 15,  109 => 14,  104 => 13,  102 => 12,  100 => 11,  96 => 10,  90 => 9,  83 => 6,  77 => 5,  70 => 2,  64 => 1,  57 => 47,  55 => 32,  53 => 28,  51 => 22,  49 => 9,  47 => 5,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- block form_start -%}
    <form id=\"registerForm\">
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
        <button type=\"{{ type|default('button') }}\" class=\"btn btn-primary btn-block\" {{ block('attributes') }}>{{ name|trans }}</button>
    </div>
    <p class=\"text-center\" style=\"margin-top: -10px;\">
        {% trans %}REGISTER_FORM_ACCOUNT_QUESTION{% endtrans %} <a href=\"\">{% trans %}SIGN_UP{% endtrans %}</a>
    </p>
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
    </div>
{% endblock %}
", "layouts/form_register_layout.html.twig", "B:\\PROGRAMOWANIE\\PROJEKTY\\umowsie\\templates\\layouts\\form_register_layout.html.twig");
    }
}
