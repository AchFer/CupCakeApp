<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_d77be861bb0ef7d43b9d9d6f27ffe8574ec4342913a41e8bf7de0f39bcb5d840 extends Twig_Template
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
        $__internal_15ed4b1b729b7cc24bbeaefc45a3ba236513ebf4cab32acb51da9b07177f0fb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15ed4b1b729b7cc24bbeaefc45a3ba236513ebf4cab32acb51da9b07177f0fb1->enter($__internal_15ed4b1b729b7cc24bbeaefc45a3ba236513ebf4cab32acb51da9b07177f0fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_43a31a722f96cd82ecd430f612c17a688eb6e92aeccec9b3efac3755cd9f9554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43a31a722f96cd82ecd430f612c17a688eb6e92aeccec9b3efac3755cd9f9554->enter($__internal_43a31a722f96cd82ecd430f612c17a688eb6e92aeccec9b3efac3755cd9f9554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_15ed4b1b729b7cc24bbeaefc45a3ba236513ebf4cab32acb51da9b07177f0fb1->leave($__internal_15ed4b1b729b7cc24bbeaefc45a3ba236513ebf4cab32acb51da9b07177f0fb1_prof);

        
        $__internal_43a31a722f96cd82ecd430f612c17a688eb6e92aeccec9b3efac3755cd9f9554->leave($__internal_43a31a722f96cd82ecd430f612c17a688eb6e92aeccec9b3efac3755cd9f9554_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
