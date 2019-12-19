<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_814875c682e31457d9cf0a9b4c32ac807586813cb62a7387b00326efc9939a4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c00c56fb47e32b7327c2de4f50476382b59cb524614968f230f00914239fc11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c00c56fb47e32b7327c2de4f50476382b59cb524614968f230f00914239fc11->enter($__internal_0c00c56fb47e32b7327c2de4f50476382b59cb524614968f230f00914239fc11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_6e369e51433c454a220da70c328c8614896a65081710860153457be1828d5d50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e369e51433c454a220da70c328c8614896a65081710860153457be1828d5d50->enter($__internal_6e369e51433c454a220da70c328c8614896a65081710860153457be1828d5d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_0c00c56fb47e32b7327c2de4f50476382b59cb524614968f230f00914239fc11->leave($__internal_0c00c56fb47e32b7327c2de4f50476382b59cb524614968f230f00914239fc11_prof);

        
        $__internal_6e369e51433c454a220da70c328c8614896a65081710860153457be1828d5d50->leave($__internal_6e369e51433c454a220da70c328c8614896a65081710860153457be1828d5d50_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
