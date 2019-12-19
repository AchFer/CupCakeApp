<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_e99e746005fed6386ba2c16088bc69b6ff057352d8a8b3f1508ef883a19a84d2 extends Twig_Template
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
        $__internal_972679c0126260295baecd592ce2ba91bcb8861a6020a3f94f97b07f588a208f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_972679c0126260295baecd592ce2ba91bcb8861a6020a3f94f97b07f588a208f->enter($__internal_972679c0126260295baecd592ce2ba91bcb8861a6020a3f94f97b07f588a208f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_9bcbaab09c57ac7f3a1f7f843313212cceabdcec1e8f737f5a3f5d10e30e2084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bcbaab09c57ac7f3a1f7f843313212cceabdcec1e8f737f5a3f5d10e30e2084->enter($__internal_9bcbaab09c57ac7f3a1f7f843313212cceabdcec1e8f737f5a3f5d10e30e2084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_972679c0126260295baecd592ce2ba91bcb8861a6020a3f94f97b07f588a208f->leave($__internal_972679c0126260295baecd592ce2ba91bcb8861a6020a3f94f97b07f588a208f_prof);

        
        $__internal_9bcbaab09c57ac7f3a1f7f843313212cceabdcec1e8f737f5a3f5d10e30e2084->leave($__internal_9bcbaab09c57ac7f3a1f7f843313212cceabdcec1e8f737f5a3f5d10e30e2084_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
