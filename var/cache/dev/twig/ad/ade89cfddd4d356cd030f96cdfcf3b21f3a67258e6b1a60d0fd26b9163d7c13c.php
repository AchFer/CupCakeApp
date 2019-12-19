<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_365c27fd9c7633048608313d5d82ab1801de011b42aa4496370861cdb1fca77b extends Twig_Template
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
        $__internal_23bda0e4472ac5d552d1f2418fccbb99ef207f8548b3dd1d30ab9cea84872fad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23bda0e4472ac5d552d1f2418fccbb99ef207f8548b3dd1d30ab9cea84872fad->enter($__internal_23bda0e4472ac5d552d1f2418fccbb99ef207f8548b3dd1d30ab9cea84872fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_86238ddbc0a3eaf1ddbd738158150a3d24542aa9badd449326a16f4daca2680b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86238ddbc0a3eaf1ddbd738158150a3d24542aa9badd449326a16f4daca2680b->enter($__internal_86238ddbc0a3eaf1ddbd738158150a3d24542aa9badd449326a16f4daca2680b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_23bda0e4472ac5d552d1f2418fccbb99ef207f8548b3dd1d30ab9cea84872fad->leave($__internal_23bda0e4472ac5d552d1f2418fccbb99ef207f8548b3dd1d30ab9cea84872fad_prof);

        
        $__internal_86238ddbc0a3eaf1ddbd738158150a3d24542aa9badd449326a16f4daca2680b->leave($__internal_86238ddbc0a3eaf1ddbd738158150a3d24542aa9badd449326a16f4daca2680b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
