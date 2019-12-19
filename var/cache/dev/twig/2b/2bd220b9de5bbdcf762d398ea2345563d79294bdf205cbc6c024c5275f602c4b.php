<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_eb1020bbec319d364e610a638146cf65d67b987c926cabf0f7570657fbbca79b extends Twig_Template
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
        $__internal_0557b57dce082899e79f5cf0102b212e772e288e2911b91c06cd9cb80d46a586 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0557b57dce082899e79f5cf0102b212e772e288e2911b91c06cd9cb80d46a586->enter($__internal_0557b57dce082899e79f5cf0102b212e772e288e2911b91c06cd9cb80d46a586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_7ce1482a4e0daae4d13151b224f6118acc2da7f4961bd4931201f84935f06570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce1482a4e0daae4d13151b224f6118acc2da7f4961bd4931201f84935f06570->enter($__internal_7ce1482a4e0daae4d13151b224f6118acc2da7f4961bd4931201f84935f06570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_0557b57dce082899e79f5cf0102b212e772e288e2911b91c06cd9cb80d46a586->leave($__internal_0557b57dce082899e79f5cf0102b212e772e288e2911b91c06cd9cb80d46a586_prof);

        
        $__internal_7ce1482a4e0daae4d13151b224f6118acc2da7f4961bd4931201f84935f06570->leave($__internal_7ce1482a4e0daae4d13151b224f6118acc2da7f4961bd4931201f84935f06570_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
