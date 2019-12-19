<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_70a111eb4291424fcc0b83a502d69802db5d1d5067bd628e8efba58d80e8bf45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_3c623c210eb7222332fe12729f68477256599d3a8412f123f56338394e686192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c623c210eb7222332fe12729f68477256599d3a8412f123f56338394e686192->enter($__internal_3c623c210eb7222332fe12729f68477256599d3a8412f123f56338394e686192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_8ee602ecc842c90d5c32521d8c3d72b46749450a97639ef8429ad085a4b38a7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ee602ecc842c90d5c32521d8c3d72b46749450a97639ef8429ad085a4b38a7d->enter($__internal_8ee602ecc842c90d5c32521d8c3d72b46749450a97639ef8429ad085a4b38a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c623c210eb7222332fe12729f68477256599d3a8412f123f56338394e686192->leave($__internal_3c623c210eb7222332fe12729f68477256599d3a8412f123f56338394e686192_prof);

        
        $__internal_8ee602ecc842c90d5c32521d8c3d72b46749450a97639ef8429ad085a4b38a7d->leave($__internal_8ee602ecc842c90d5c32521d8c3d72b46749450a97639ef8429ad085a4b38a7d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e0e5db22a6fd5ed8d2aec788f5c24b512bc037329dc5aece389beea1571c8ab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0e5db22a6fd5ed8d2aec788f5c24b512bc037329dc5aece389beea1571c8ab6->enter($__internal_e0e5db22a6fd5ed8d2aec788f5c24b512bc037329dc5aece389beea1571c8ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fd23196e5943982f01767d05f4e8e584b8afb588f16b3d6de09c1914660bf370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd23196e5943982f01767d05f4e8e584b8afb588f16b3d6de09c1914660bf370->enter($__internal_fd23196e5943982f01767d05f4e8e584b8afb588f16b3d6de09c1914660bf370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_fd23196e5943982f01767d05f4e8e584b8afb588f16b3d6de09c1914660bf370->leave($__internal_fd23196e5943982f01767d05f4e8e584b8afb588f16b3d6de09c1914660bf370_prof);

        
        $__internal_e0e5db22a6fd5ed8d2aec788f5c24b512bc037329dc5aece389beea1571c8ab6->leave($__internal_e0e5db22a6fd5ed8d2aec788f5c24b512bc037329dc5aece389beea1571c8ab6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a0e2981599b7dea9b058bfebe8957686dac19b92ce2cdfb13bcf5e04caa0d944 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0e2981599b7dea9b058bfebe8957686dac19b92ce2cdfb13bcf5e04caa0d944->enter($__internal_a0e2981599b7dea9b058bfebe8957686dac19b92ce2cdfb13bcf5e04caa0d944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1492cd5ea209c3b8d3ced8ea89036fa409d4691c821046997edce0f350cefece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1492cd5ea209c3b8d3ced8ea89036fa409d4691c821046997edce0f350cefece->enter($__internal_1492cd5ea209c3b8d3ced8ea89036fa409d4691c821046997edce0f350cefece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_1492cd5ea209c3b8d3ced8ea89036fa409d4691c821046997edce0f350cefece->leave($__internal_1492cd5ea209c3b8d3ced8ea89036fa409d4691c821046997edce0f350cefece_prof);

        
        $__internal_a0e2981599b7dea9b058bfebe8957686dac19b92ce2cdfb13bcf5e04caa0d944->leave($__internal_a0e2981599b7dea9b058bfebe8957686dac19b92ce2cdfb13bcf5e04caa0d944_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6844b0822e8c022ebae06416e0a063416f9999e85b2f6ed6e967bdefdeed1ebe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6844b0822e8c022ebae06416e0a063416f9999e85b2f6ed6e967bdefdeed1ebe->enter($__internal_6844b0822e8c022ebae06416e0a063416f9999e85b2f6ed6e967bdefdeed1ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e8d5d0cbacb7b4f21b532032a4fd656c9e65c930e336920c697179483db88437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8d5d0cbacb7b4f21b532032a4fd656c9e65c930e336920c697179483db88437->enter($__internal_e8d5d0cbacb7b4f21b532032a4fd656c9e65c930e336920c697179483db88437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e8d5d0cbacb7b4f21b532032a4fd656c9e65c930e336920c697179483db88437->leave($__internal_e8d5d0cbacb7b4f21b532032a4fd656c9e65c930e336920c697179483db88437_prof);

        
        $__internal_6844b0822e8c022ebae06416e0a063416f9999e85b2f6ed6e967bdefdeed1ebe->leave($__internal_6844b0822e8c022ebae06416e0a063416f9999e85b2f6ed6e967bdefdeed1ebe_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
