<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_7add7db37e1a6cf606715543c14155df07dbae2f8c3637e66ff11fcf125a7104 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e614aa2c5612888f0bcfba96b60e5e33b749d4cef8be270a85286c6809e9722 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e614aa2c5612888f0bcfba96b60e5e33b749d4cef8be270a85286c6809e9722->enter($__internal_1e614aa2c5612888f0bcfba96b60e5e33b749d4cef8be270a85286c6809e9722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_907f472e54ad823f73315afe438cd2d985b6be1b0612f81a7220aab5ca459123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_907f472e54ad823f73315afe438cd2d985b6be1b0612f81a7220aab5ca459123->enter($__internal_907f472e54ad823f73315afe438cd2d985b6be1b0612f81a7220aab5ca459123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e614aa2c5612888f0bcfba96b60e5e33b749d4cef8be270a85286c6809e9722->leave($__internal_1e614aa2c5612888f0bcfba96b60e5e33b749d4cef8be270a85286c6809e9722_prof);

        
        $__internal_907f472e54ad823f73315afe438cd2d985b6be1b0612f81a7220aab5ca459123->leave($__internal_907f472e54ad823f73315afe438cd2d985b6be1b0612f81a7220aab5ca459123_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_14c475fde4faaa806e29a146b03903d2cd84e38d8312fc4b01bbe52ca8cbfca9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14c475fde4faaa806e29a146b03903d2cd84e38d8312fc4b01bbe52ca8cbfca9->enter($__internal_14c475fde4faaa806e29a146b03903d2cd84e38d8312fc4b01bbe52ca8cbfca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_af5d06171063a5966afc537c01d2fff911d868596603e186f8b012842619c2d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af5d06171063a5966afc537c01d2fff911d868596603e186f8b012842619c2d7->enter($__internal_af5d06171063a5966afc537c01d2fff911d868596603e186f8b012842619c2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_af5d06171063a5966afc537c01d2fff911d868596603e186f8b012842619c2d7->leave($__internal_af5d06171063a5966afc537c01d2fff911d868596603e186f8b012842619c2d7_prof);

        
        $__internal_14c475fde4faaa806e29a146b03903d2cd84e38d8312fc4b01bbe52ca8cbfca9->leave($__internal_14c475fde4faaa806e29a146b03903d2cd84e38d8312fc4b01bbe52ca8cbfca9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b04f1157396da9f5e4e158db7cc62d5c417aed55eff1f1b5c00d4f5611bf81e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b04f1157396da9f5e4e158db7cc62d5c417aed55eff1f1b5c00d4f5611bf81e2->enter($__internal_b04f1157396da9f5e4e158db7cc62d5c417aed55eff1f1b5c00d4f5611bf81e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_36878fa2eb3d2d161330969bbf26f3ca1715a0a92ffa077f6b6472d8d455a48a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36878fa2eb3d2d161330969bbf26f3ca1715a0a92ffa077f6b6472d8d455a48a->enter($__internal_36878fa2eb3d2d161330969bbf26f3ca1715a0a92ffa077f6b6472d8d455a48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_36878fa2eb3d2d161330969bbf26f3ca1715a0a92ffa077f6b6472d8d455a48a->leave($__internal_36878fa2eb3d2d161330969bbf26f3ca1715a0a92ffa077f6b6472d8d455a48a_prof);

        
        $__internal_b04f1157396da9f5e4e158db7cc62d5c417aed55eff1f1b5c00d4f5611bf81e2->leave($__internal_b04f1157396da9f5e4e158db7cc62d5c417aed55eff1f1b5c00d4f5611bf81e2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c43e2846f95ba6ad8ed4d318e7f0b312205c88e7a93455d3ba8241e170cefda3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c43e2846f95ba6ad8ed4d318e7f0b312205c88e7a93455d3ba8241e170cefda3->enter($__internal_c43e2846f95ba6ad8ed4d318e7f0b312205c88e7a93455d3ba8241e170cefda3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_984c4c65bd1f4c300127621e16e1570a15220c70624a1661119cd91566abe291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_984c4c65bd1f4c300127621e16e1570a15220c70624a1661119cd91566abe291->enter($__internal_984c4c65bd1f4c300127621e16e1570a15220c70624a1661119cd91566abe291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_984c4c65bd1f4c300127621e16e1570a15220c70624a1661119cd91566abe291->leave($__internal_984c4c65bd1f4c300127621e16e1570a15220c70624a1661119cd91566abe291_prof);

        
        $__internal_c43e2846f95ba6ad8ed4d318e7f0b312205c88e7a93455d3ba8241e170cefda3->leave($__internal_c43e2846f95ba6ad8ed4d318e7f0b312205c88e7a93455d3ba8241e170cefda3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
