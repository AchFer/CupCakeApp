<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3b0ca4e4a4cef651b8d7bff2d8efcdaba233b1a73f19aecc7e3db06348577de8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_040daab639379009651a12ff88e99e2c157bbe573be313732c48ccfb1670084a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_040daab639379009651a12ff88e99e2c157bbe573be313732c48ccfb1670084a->enter($__internal_040daab639379009651a12ff88e99e2c157bbe573be313732c48ccfb1670084a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_abc942b158605e4ed4e9cfbb73e479909b328d15e5d261400c4a71f0cd4fd260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abc942b158605e4ed4e9cfbb73e479909b328d15e5d261400c4a71f0cd4fd260->enter($__internal_abc942b158605e4ed4e9cfbb73e479909b328d15e5d261400c4a71f0cd4fd260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_040daab639379009651a12ff88e99e2c157bbe573be313732c48ccfb1670084a->leave($__internal_040daab639379009651a12ff88e99e2c157bbe573be313732c48ccfb1670084a_prof);

        
        $__internal_abc942b158605e4ed4e9cfbb73e479909b328d15e5d261400c4a71f0cd4fd260->leave($__internal_abc942b158605e4ed4e9cfbb73e479909b328d15e5d261400c4a71f0cd4fd260_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_add5a6919912e86d2b5270363d5ee13f2d752b2a19f040c96ed059cc708e3706 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_add5a6919912e86d2b5270363d5ee13f2d752b2a19f040c96ed059cc708e3706->enter($__internal_add5a6919912e86d2b5270363d5ee13f2d752b2a19f040c96ed059cc708e3706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_927680ba0e66cc7e75aed632efa7c43037fe5fad1108f90e463913127fe96b31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_927680ba0e66cc7e75aed632efa7c43037fe5fad1108f90e463913127fe96b31->enter($__internal_927680ba0e66cc7e75aed632efa7c43037fe5fad1108f90e463913127fe96b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_927680ba0e66cc7e75aed632efa7c43037fe5fad1108f90e463913127fe96b31->leave($__internal_927680ba0e66cc7e75aed632efa7c43037fe5fad1108f90e463913127fe96b31_prof);

        
        $__internal_add5a6919912e86d2b5270363d5ee13f2d752b2a19f040c96ed059cc708e3706->leave($__internal_add5a6919912e86d2b5270363d5ee13f2d752b2a19f040c96ed059cc708e3706_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfa50948ece233a57ac48e6fdb76c5b68322bd2cdd6cdd11ed7a77bef1ebc8e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfa50948ece233a57ac48e6fdb76c5b68322bd2cdd6cdd11ed7a77bef1ebc8e9->enter($__internal_cfa50948ece233a57ac48e6fdb76c5b68322bd2cdd6cdd11ed7a77bef1ebc8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_753f8e2a4eecfc37749116fad5d613b075ae10c4144ea0888ef05b0ef15d8bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_753f8e2a4eecfc37749116fad5d613b075ae10c4144ea0888ef05b0ef15d8bf5->enter($__internal_753f8e2a4eecfc37749116fad5d613b075ae10c4144ea0888ef05b0ef15d8bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_753f8e2a4eecfc37749116fad5d613b075ae10c4144ea0888ef05b0ef15d8bf5->leave($__internal_753f8e2a4eecfc37749116fad5d613b075ae10c4144ea0888ef05b0ef15d8bf5_prof);

        
        $__internal_cfa50948ece233a57ac48e6fdb76c5b68322bd2cdd6cdd11ed7a77bef1ebc8e9->leave($__internal_cfa50948ece233a57ac48e6fdb76c5b68322bd2cdd6cdd11ed7a77bef1ebc8e9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
