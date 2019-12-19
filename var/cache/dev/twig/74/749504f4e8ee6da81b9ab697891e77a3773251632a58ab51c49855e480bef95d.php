<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_a978b215849fdbcef42f3685961ba8d0926f3333a73f9791b34a875ca6131c8b extends Twig_Template
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
        $__internal_370c4b338431225c7cc05739cb110a9aaf001143509b768bd41922a0c14e29aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_370c4b338431225c7cc05739cb110a9aaf001143509b768bd41922a0c14e29aa->enter($__internal_370c4b338431225c7cc05739cb110a9aaf001143509b768bd41922a0c14e29aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_261ffd9cdcf858154c83fc0a23b11812fda8e0ce2a635db415ee2f88f9505104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_261ffd9cdcf858154c83fc0a23b11812fda8e0ce2a635db415ee2f88f9505104->enter($__internal_261ffd9cdcf858154c83fc0a23b11812fda8e0ce2a635db415ee2f88f9505104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_370c4b338431225c7cc05739cb110a9aaf001143509b768bd41922a0c14e29aa->leave($__internal_370c4b338431225c7cc05739cb110a9aaf001143509b768bd41922a0c14e29aa_prof);

        
        $__internal_261ffd9cdcf858154c83fc0a23b11812fda8e0ce2a635db415ee2f88f9505104->leave($__internal_261ffd9cdcf858154c83fc0a23b11812fda8e0ce2a635db415ee2f88f9505104_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
