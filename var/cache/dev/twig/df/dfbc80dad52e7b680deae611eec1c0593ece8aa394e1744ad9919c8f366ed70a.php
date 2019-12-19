<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_8932ddd893cf6747f936e39210167db5d22588569d935778449f25c0c0856662 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c811a9920f65c1398ed94d7c87adf66dde221dbc365c83863f02053b71945414 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c811a9920f65c1398ed94d7c87adf66dde221dbc365c83863f02053b71945414->enter($__internal_c811a9920f65c1398ed94d7c87adf66dde221dbc365c83863f02053b71945414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_3f9282d6764c1bdb08b374a9cfc404035307bb09b12921a82cf75d1e7e39cda6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f9282d6764c1bdb08b374a9cfc404035307bb09b12921a82cf75d1e7e39cda6->enter($__internal_3f9282d6764c1bdb08b374a9cfc404035307bb09b12921a82cf75d1e7e39cda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c811a9920f65c1398ed94d7c87adf66dde221dbc365c83863f02053b71945414->leave($__internal_c811a9920f65c1398ed94d7c87adf66dde221dbc365c83863f02053b71945414_prof);

        
        $__internal_3f9282d6764c1bdb08b374a9cfc404035307bb09b12921a82cf75d1e7e39cda6->leave($__internal_3f9282d6764c1bdb08b374a9cfc404035307bb09b12921a82cf75d1e7e39cda6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9bbbf5b9b15992ebd5e07914489188795048dc253ca56ad5c9dc15a40e78e490 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bbbf5b9b15992ebd5e07914489188795048dc253ca56ad5c9dc15a40e78e490->enter($__internal_9bbbf5b9b15992ebd5e07914489188795048dc253ca56ad5c9dc15a40e78e490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5c0dfe836ed86230860af1134d38b9afa3b0aa7a04d3c8f07ff5966a89253cc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c0dfe836ed86230860af1134d38b9afa3b0aa7a04d3c8f07ff5966a89253cc6->enter($__internal_5c0dfe836ed86230860af1134d38b9afa3b0aa7a04d3c8f07ff5966a89253cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_5c0dfe836ed86230860af1134d38b9afa3b0aa7a04d3c8f07ff5966a89253cc6->leave($__internal_5c0dfe836ed86230860af1134d38b9afa3b0aa7a04d3c8f07ff5966a89253cc6_prof);

        
        $__internal_9bbbf5b9b15992ebd5e07914489188795048dc253ca56ad5c9dc15a40e78e490->leave($__internal_9bbbf5b9b15992ebd5e07914489188795048dc253ca56ad5c9dc15a40e78e490_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_91296361cd92bf95ee64466f51000055847cc0c58cddfe9ad0715d0ccbf8f548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91296361cd92bf95ee64466f51000055847cc0c58cddfe9ad0715d0ccbf8f548->enter($__internal_91296361cd92bf95ee64466f51000055847cc0c58cddfe9ad0715d0ccbf8f548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8ec550454027b7c23a0d0e73dc75abc3b7ed0250c48e8ebb6791946b96d764f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ec550454027b7c23a0d0e73dc75abc3b7ed0250c48e8ebb6791946b96d764f0->enter($__internal_8ec550454027b7c23a0d0e73dc75abc3b7ed0250c48e8ebb6791946b96d764f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_8ec550454027b7c23a0d0e73dc75abc3b7ed0250c48e8ebb6791946b96d764f0->leave($__internal_8ec550454027b7c23a0d0e73dc75abc3b7ed0250c48e8ebb6791946b96d764f0_prof);

        
        $__internal_91296361cd92bf95ee64466f51000055847cc0c58cddfe9ad0715d0ccbf8f548->leave($__internal_91296361cd92bf95ee64466f51000055847cc0c58cddfe9ad0715d0ccbf8f548_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
