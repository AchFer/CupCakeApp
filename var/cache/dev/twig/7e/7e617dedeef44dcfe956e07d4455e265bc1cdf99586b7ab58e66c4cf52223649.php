<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_339a379b88acc686ab60cc9ae52ae0343a740e4d9f6f7faba4241fe55cf0274e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_743a37115719ade90e1f2c87843bef9cdb036acb63443da309459c38ff19382e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_743a37115719ade90e1f2c87843bef9cdb036acb63443da309459c38ff19382e->enter($__internal_743a37115719ade90e1f2c87843bef9cdb036acb63443da309459c38ff19382e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_734bd4e3f24a78c6ee20238fcb1710cd6ca8d80288218c45b3b4a59c81c056f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_734bd4e3f24a78c6ee20238fcb1710cd6ca8d80288218c45b3b4a59c81c056f5->enter($__internal_734bd4e3f24a78c6ee20238fcb1710cd6ca8d80288218c45b3b4a59c81c056f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_743a37115719ade90e1f2c87843bef9cdb036acb63443da309459c38ff19382e->leave($__internal_743a37115719ade90e1f2c87843bef9cdb036acb63443da309459c38ff19382e_prof);

        
        $__internal_734bd4e3f24a78c6ee20238fcb1710cd6ca8d80288218c45b3b4a59c81c056f5->leave($__internal_734bd4e3f24a78c6ee20238fcb1710cd6ca8d80288218c45b3b4a59c81c056f5_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_db82c1b6a152f458276e2ed080328ae95b88a471fa720248be13976d5bb727d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db82c1b6a152f458276e2ed080328ae95b88a471fa720248be13976d5bb727d3->enter($__internal_db82c1b6a152f458276e2ed080328ae95b88a471fa720248be13976d5bb727d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_6fa677719718c9e7cbd10c17b412a8567e7a552df4e527df735f064cddbf7ca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fa677719718c9e7cbd10c17b412a8567e7a552df4e527df735f064cddbf7ca3->enter($__internal_6fa677719718c9e7cbd10c17b412a8567e7a552df4e527df735f064cddbf7ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_6fa677719718c9e7cbd10c17b412a8567e7a552df4e527df735f064cddbf7ca3->leave($__internal_6fa677719718c9e7cbd10c17b412a8567e7a552df4e527df735f064cddbf7ca3_prof);

        
        $__internal_db82c1b6a152f458276e2ed080328ae95b88a471fa720248be13976d5bb727d3->leave($__internal_db82c1b6a152f458276e2ed080328ae95b88a471fa720248be13976d5bb727d3_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0d272b6ae5b65c2e17aa35bee7ce96efda948dba421cbcc51d0510a9b7898bde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d272b6ae5b65c2e17aa35bee7ce96efda948dba421cbcc51d0510a9b7898bde->enter($__internal_0d272b6ae5b65c2e17aa35bee7ce96efda948dba421cbcc51d0510a9b7898bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8febf591f55bb3084a29e87da8c91d512d455f64b904d124816814cbb364869f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8febf591f55bb3084a29e87da8c91d512d455f64b904d124816814cbb364869f->enter($__internal_8febf591f55bb3084a29e87da8c91d512d455f64b904d124816814cbb364869f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_8febf591f55bb3084a29e87da8c91d512d455f64b904d124816814cbb364869f->leave($__internal_8febf591f55bb3084a29e87da8c91d512d455f64b904d124816814cbb364869f_prof);

        
        $__internal_0d272b6ae5b65c2e17aa35bee7ce96efda948dba421cbcc51d0510a9b7898bde->leave($__internal_0d272b6ae5b65c2e17aa35bee7ce96efda948dba421cbcc51d0510a9b7898bde_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
