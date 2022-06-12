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

/* device/index.html.twig */
class __TwigTemplate_ad65176cbfa8e9f6ee34949415331bd2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "device/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "device/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "device/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t<div class=\"container\">
\t\t<table class=\"table mt-2\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Name</th>
\t\t\t\t\t<th>Location</th>
\t\t\t\t\t<th>Hostname</th>
\t\t\t\t\t<th>Port</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 16
        if ((twig_length_filter($this->env, (isset($context["devices"]) || array_key_exists("devices", $context) ? $context["devices"] : (function () { throw new RuntimeError('Variable "devices" does not exist.', 16, $this->source); })())) > 0)) {
            // line 17
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["devices"]) || array_key_exists("devices", $context) ? $context["devices"] : (function () { throw new RuntimeError('Variable "devices" does not exist.', 17, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["device"]) {
                // line 18
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "name", [], "any", false, false, false, 19), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "location", [], "any", false, false, false, 20), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "hostname", [], "any", false, false, false, 21), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "port", [], "any", false, false, false, 22), "html", null, true);
                echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['device'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "\t\t\t\t";
        } else {
            // line 26
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>No devices</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        // line 30
        echo "\t\t\t</tbody>
\t\t</tbody>
\t</table>
</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "device/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 30,  115 => 26,  112 => 25,  103 => 22,  99 => 21,  95 => 20,  91 => 19,  88 => 18,  83 => 17,  81 => 16,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
\t<div class=\"container\">
\t\t<table class=\"table mt-2\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Name</th>
\t\t\t\t\t<th>Location</th>
\t\t\t\t\t<th>Hostname</th>
\t\t\t\t\t<th>Port</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% if devices|length > 0 %}
\t\t\t\t\t{% for device in devices %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{device.name}}</td>
\t\t\t\t\t\t\t<td>{{device.location}}</td>
\t\t\t\t\t\t\t<td>{{device.hostname}}</td>
\t\t\t\t\t\t\t<td>{{device.port}}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t{% else %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>No devices</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endif %}
\t\t\t</tbody>
\t\t</tbody>
\t</table>
</div>{% endblock %}
", "device/index.html.twig", "/Users/daan/coding/PHP/LocalYee/templates/device/index.html.twig");
    }
}
