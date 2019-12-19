<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_ff6662c39aec238cb6eef0568bb4793e2c5bfe19901dfbf17326fe33684ce106 extends Twig_Template
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
        $__internal_8197d9a82e1658f99e333e795ca1e37dd6692ddba50109b30536443259be8cb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8197d9a82e1658f99e333e795ca1e37dd6692ddba50109b30536443259be8cb6->enter($__internal_8197d9a82e1658f99e333e795ca1e37dd6692ddba50109b30536443259be8cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_2b0488b222dbbb2cf23345a37803b14cd2553bfc1acb9eb69ba1168ecbebc3b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b0488b222dbbb2cf23345a37803b14cd2553bfc1acb9eb69ba1168ecbebc3b5->enter($__internal_2b0488b222dbbb2cf23345a37803b14cd2553bfc1acb9eb69ba1168ecbebc3b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_8197d9a82e1658f99e333e795ca1e37dd6692ddba50109b30536443259be8cb6->leave($__internal_8197d9a82e1658f99e333e795ca1e37dd6692ddba50109b30536443259be8cb6_prof);

        
        $__internal_2b0488b222dbbb2cf23345a37803b14cd2553bfc1acb9eb69ba1168ecbebc3b5->leave($__internal_2b0488b222dbbb2cf23345a37803b14cd2553bfc1acb9eb69ba1168ecbebc3b5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
