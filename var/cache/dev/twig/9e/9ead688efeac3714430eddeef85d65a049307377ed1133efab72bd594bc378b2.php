<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_af1214df7d87d40b6524b8f2e85d27d0e741e3483c2346bebc260567a9ee41a4 extends Twig_Template
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
        $__internal_06d40927b0e0dce331b1b500c45820eaa4e344a230a912f734d0833a10a0e894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06d40927b0e0dce331b1b500c45820eaa4e344a230a912f734d0833a10a0e894->enter($__internal_06d40927b0e0dce331b1b500c45820eaa4e344a230a912f734d0833a10a0e894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_4fd979b164cfde0a492aee4e445c17bf4afec71fd10f841e0e0eacae780f9a91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fd979b164cfde0a492aee4e445c17bf4afec71fd10f841e0e0eacae780f9a91->enter($__internal_4fd979b164cfde0a492aee4e445c17bf4afec71fd10f841e0e0eacae780f9a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_06d40927b0e0dce331b1b500c45820eaa4e344a230a912f734d0833a10a0e894->leave($__internal_06d40927b0e0dce331b1b500c45820eaa4e344a230a912f734d0833a10a0e894_prof);

        
        $__internal_4fd979b164cfde0a492aee4e445c17bf4afec71fd10f841e0e0eacae780f9a91->leave($__internal_4fd979b164cfde0a492aee4e445c17bf4afec71fd10f841e0e0eacae780f9a91_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
", "TwigBundle:Exception:error.txt.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
