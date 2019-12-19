<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_112773946246267fb80eee79a606b4434367de98a68a12251724aa0291b50da0 extends Twig_Template
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
        $__internal_c7ffe32a0bd7f8112595c585de1c4843e4de87d7135b0f27857c8f5be9faf5af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7ffe32a0bd7f8112595c585de1c4843e4de87d7135b0f27857c8f5be9faf5af->enter($__internal_c7ffe32a0bd7f8112595c585de1c4843e4de87d7135b0f27857c8f5be9faf5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_c19ca6663ad5c6caafe84210eece5f760ddf424505e6137cea703b9c00ef284e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c19ca6663ad5c6caafe84210eece5f760ddf424505e6137cea703b9c00ef284e->enter($__internal_c19ca6663ad5c6caafe84210eece5f760ddf424505e6137cea703b9c00ef284e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_c7ffe32a0bd7f8112595c585de1c4843e4de87d7135b0f27857c8f5be9faf5af->leave($__internal_c7ffe32a0bd7f8112595c585de1c4843e4de87d7135b0f27857c8f5be9faf5af_prof);

        
        $__internal_c19ca6663ad5c6caafe84210eece5f760ddf424505e6137cea703b9c00ef284e->leave($__internal_c19ca6663ad5c6caafe84210eece5f760ddf424505e6137cea703b9c00ef284e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
