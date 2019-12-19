<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_5ed604ec5bede3aa59028081540c653ddd67c517a1525aa549ae68332f999974 extends Twig_Template
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
        $__internal_89b321a78d187a62dc5d5796b464e91a194bfa72f1246c21331e4c8dfb93b31c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89b321a78d187a62dc5d5796b464e91a194bfa72f1246c21331e4c8dfb93b31c->enter($__internal_89b321a78d187a62dc5d5796b464e91a194bfa72f1246c21331e4c8dfb93b31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_042c5a9407782628a68bbc915dd853adad660e8b5642b157067619071d553a3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_042c5a9407782628a68bbc915dd853adad660e8b5642b157067619071d553a3c->enter($__internal_042c5a9407782628a68bbc915dd853adad660e8b5642b157067619071d553a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_89b321a78d187a62dc5d5796b464e91a194bfa72f1246c21331e4c8dfb93b31c->leave($__internal_89b321a78d187a62dc5d5796b464e91a194bfa72f1246c21331e4c8dfb93b31c_prof);

        
        $__internal_042c5a9407782628a68bbc915dd853adad660e8b5642b157067619071d553a3c->leave($__internal_042c5a9407782628a68bbc915dd853adad660e8b5642b157067619071d553a3c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
