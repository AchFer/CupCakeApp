<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_77befb7007088e2f6e4fc5f8f41cfb5ed50884f59715cce6d3b4a49adc6e3344 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
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
        $__internal_6b33c2826e35c59848abffd5c661dc87551868301455da2b20f74b9fb98853a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b33c2826e35c59848abffd5c661dc87551868301455da2b20f74b9fb98853a9->enter($__internal_6b33c2826e35c59848abffd5c661dc87551868301455da2b20f74b9fb98853a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_1e63ba80a0b9660afc1b365e051834cd0371d6c8b6c76bd9d3592c086995af21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e63ba80a0b9660afc1b365e051834cd0371d6c8b6c76bd9d3592c086995af21->enter($__internal_1e63ba80a0b9660afc1b365e051834cd0371d6c8b6c76bd9d3592c086995af21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b33c2826e35c59848abffd5c661dc87551868301455da2b20f74b9fb98853a9->leave($__internal_6b33c2826e35c59848abffd5c661dc87551868301455da2b20f74b9fb98853a9_prof);

        
        $__internal_1e63ba80a0b9660afc1b365e051834cd0371d6c8b6c76bd9d3592c086995af21->leave($__internal_1e63ba80a0b9660afc1b365e051834cd0371d6c8b6c76bd9d3592c086995af21_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_bd4bf63e42ffb54ac09d151023bd1de875e42da85fd8d0ea035d57296020d1d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd4bf63e42ffb54ac09d151023bd1de875e42da85fd8d0ea035d57296020d1d1->enter($__internal_bd4bf63e42ffb54ac09d151023bd1de875e42da85fd8d0ea035d57296020d1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_10875fb6d266f0f720e8906624f08173912fabea344830a709b54c9db060bd3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10875fb6d266f0f720e8906624f08173912fabea344830a709b54c9db060bd3c->enter($__internal_10875fb6d266f0f720e8906624f08173912fabea344830a709b54c9db060bd3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_10875fb6d266f0f720e8906624f08173912fabea344830a709b54c9db060bd3c->leave($__internal_10875fb6d266f0f720e8906624f08173912fabea344830a709b54c9db060bd3c_prof);

        
        $__internal_bd4bf63e42ffb54ac09d151023bd1de875e42da85fd8d0ea035d57296020d1d1->leave($__internal_bd4bf63e42ffb54ac09d151023bd1de875e42da85fd8d0ea035d57296020d1d1_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b6fb04d9e77bed3939e7bc01e4b4242131dc0437db60f29c9fcd9c1c92b96457 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6fb04d9e77bed3939e7bc01e4b4242131dc0437db60f29c9fcd9c1c92b96457->enter($__internal_b6fb04d9e77bed3939e7bc01e4b4242131dc0437db60f29c9fcd9c1c92b96457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_06a319fa0577ba7815f18ee45cae04b7003d2237be6239c80a83d79a7a478374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06a319fa0577ba7815f18ee45cae04b7003d2237be6239c80a83d79a7a478374->enter($__internal_06a319fa0577ba7815f18ee45cae04b7003d2237be6239c80a83d79a7a478374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_06a319fa0577ba7815f18ee45cae04b7003d2237be6239c80a83d79a7a478374->leave($__internal_06a319fa0577ba7815f18ee45cae04b7003d2237be6239c80a83d79a7a478374_prof);

        
        $__internal_b6fb04d9e77bed3939e7bc01e4b4242131dc0437db60f29c9fcd9c1c92b96457->leave($__internal_b6fb04d9e77bed3939e7bc01e4b4242131dc0437db60f29c9fcd9c1c92b96457_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
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
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
