<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_beba2c02abc3897036b5641fe050a48ccc3f49fefd820fa14496ddc2f640e28a extends Twig_Template
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
        $__internal_21befc6de773654737eb5f5df55fc67ba95e9ee80f694fe5aa85d1333b163cee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21befc6de773654737eb5f5df55fc67ba95e9ee80f694fe5aa85d1333b163cee->enter($__internal_21befc6de773654737eb5f5df55fc67ba95e9ee80f694fe5aa85d1333b163cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_babcdfa74a56a6484355a29fa855e580fff06d589511cef12ada3874dc196516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_babcdfa74a56a6484355a29fa855e580fff06d589511cef12ada3874dc196516->enter($__internal_babcdfa74a56a6484355a29fa855e580fff06d589511cef12ada3874dc196516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_21befc6de773654737eb5f5df55fc67ba95e9ee80f694fe5aa85d1333b163cee->leave($__internal_21befc6de773654737eb5f5df55fc67ba95e9ee80f694fe5aa85d1333b163cee_prof);

        
        $__internal_babcdfa74a56a6484355a29fa855e580fff06d589511cef12ada3874dc196516->leave($__internal_babcdfa74a56a6484355a29fa855e580fff06d589511cef12ada3874dc196516_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
