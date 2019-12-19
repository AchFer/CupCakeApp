<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_122ed39c4f492046c6a6ece78b4976224903e68592be6594511bb2dd817b7bd1 extends Twig_Template
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
        $__internal_e7a928af37b6abccbad62a5e0377337ce3ef82ac61aea4c81791d113974618c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7a928af37b6abccbad62a5e0377337ce3ef82ac61aea4c81791d113974618c5->enter($__internal_e7a928af37b6abccbad62a5e0377337ce3ef82ac61aea4c81791d113974618c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_be2dc2ac08aa51ccbb267975a8721fb3650861f2276c68591c7ac401ae16815d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be2dc2ac08aa51ccbb267975a8721fb3650861f2276c68591c7ac401ae16815d->enter($__internal_be2dc2ac08aa51ccbb267975a8721fb3650861f2276c68591c7ac401ae16815d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_e7a928af37b6abccbad62a5e0377337ce3ef82ac61aea4c81791d113974618c5->leave($__internal_e7a928af37b6abccbad62a5e0377337ce3ef82ac61aea4c81791d113974618c5_prof);

        
        $__internal_be2dc2ac08aa51ccbb267975a8721fb3650861f2276c68591c7ac401ae16815d->leave($__internal_be2dc2ac08aa51ccbb267975a8721fb3650861f2276c68591c7ac401ae16815d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
